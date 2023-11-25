<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Service\FileUploader;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\JsonResponse;


class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
  

// ... (other use statements)

#[Route('/ajouterproduit', name: 'add_product')]
public function addProduct(ManagerRegistry $man, Request $req, FileUploader $fileUploader): Response
{
    $product = new Product();
    $manager = $man->getManager();

    $form = $this->createForm(ProductType::class, $product);
    $form->handleRequest($req);

    if ($form->isSubmitted() && $form->isValid()) {
        // Check if a product with the same name already exists
        $existingProduct = $manager->getRepository(Product::class)->findOneBy(['nom' => $product->getNom()]);

        if ($existingProduct) {
            $this->addFlash('danger', 'Un produit avec le même nom existe déjà.');
            // You can also pass the existing product ID to redirect to its details page or handle it as needed
            return $this->redirectToRoute('OnShowAddProduct');
        }

        $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $imageFileName = $fileUploader->upload($imageFile);
            $product->setImage($imageFileName);
        }

        $manager->persist($product);
        $manager->flush();

        $this->addFlash('success', 'Le produit a été ajouté avec succès.');

        return $this->redirectToRoute('OnShowAddProduct');
    }

    return $this->renderForm('product/add.html.twig', [
        'f' => $form,
    ]);
}

#[Route('/updateproduct/{id}',name:'Product_updated')]
public function updateproduct(Request $requ,ManagerRegistry $manager,$id,ProductRepository $repo, FileUploader $fileUploader): Response
{
    $mR= $manager->getManager();
    $product= $repo->find($id);
    $form=$this->createForm(ProductType::class,$product);
    $form->handleRequest($requ);    
    if($form->isSubmitted()&& $form->isValid())
    {
        $imageFile = $form->get('image')->getData();
        if ($imageFile) 
        {
            $imageFileName = $fileUploader->upload($imageFile);
            $product->setImage($imageFileName);
        }
    $mR->persist($product);
    $mR->flush();
    
    return $this->redirectToRoute('OnShowAddProduct');
    }
    return $this->renderForm('product/add.html.twig',[
    'f'=>$form
]);
}

#[Route('/produits', name: 'OnShowAddProduct')]
public function getAll(ProductRepository $repo):Response
{
    $list=$repo->findAll();
    return $this->render('product/getall.html.twig',[
        'list'=>$list
    ]);

}
#[Route('/productdelete/{id}', name: 'delete_product')]
public function delete(ProductRepository $repo,ManagerRegistry $manager,$id):Response
{
    $product=$repo->find($id);
    $mr=$manager->getManager();
    $mr->remove($product);
    $mr->flush();

    return $this->redirectToRoute('OnShowAddProduct');

}

#[Route('/search/products', name: 'search_products')]
public function searchCriteria(Request $request, ProductRepository $productRepository): JsonResponse
{
    $criteria = [
        'nom' => $request->query->get('nom'),
        'min_price' => $request->query->get('minPrice'),
        'max_price' => $request->query->get('maxPrice'),
    ];
    $min = $request->query->get('minPrice');
 
    // Check if at least one filter is provided
    if (array_filter($criteria)&& array_key_exists('nom', $criteria)&& array_key_exists('min_price', $criteria)&& array_key_exists('max_price', $criteria)) {
        $products = $productRepository->searchByCriteria($criteria);

        // Transform the products array into a format suitable for JSON response
        $formattedProducts = [];
        foreach ($products as $product) {
            // Customize this part based on your product entity structure
            $formattedProducts[] = [
                'id' => $product->getIdpdts(),
                'nom' => $product->getNom(),
                'prix' => $product->getPrix(),
                'image' => $product->getImage(),
            ];
        }

        // Return the results as JSON
        return new JsonResponse(['produit' => $formattedProducts]);
    }

    // If no filters are provided, return an empty JSON response or an error message
    return new JsonResponse(['error' => 'Invalid request'], JsonResponse::HTTP_BAD_REQUEST);
}
}