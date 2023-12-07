<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Service\FileUploader;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Endroid\QrCode\Writer\Result\PdfResult;
use Symfony\Component\HttpFoundation\JsonResponse;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Filesystem\Filesystem;

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
public function getAll(ProductRepository $repo, Filesystem $filesystem):Response
{
    $list=$repo->findAll();
    $uploadsDirectory = $this->getParameter('uploads_directory');

    foreach ($list as $product) {
        $imgPath = $product->getImage(); // Assuming getVideo() returns the video path

        // Check if the video path starts with "file:/C"
        if (strpos($imgPath, 'C:\\') === 0) {
            // Remove the "file:/" prefix
 // Extract filename from the original path
 $filename = pathinfo($imgPath, PATHINFO_BASENAME);
                        
 // Define the new path
 $newPath = $uploadsDirectory . '/' . $filename;

 if (copy($imgPath, $newPath)) {
   
 } else {
     // Handle the case where the file move fails
     // You can log an error, throw an exception, or handle it as needed
 }
        }
    }

   
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
#[Route('/delete_product_if_quantity_zero/{id}', name: 'delete_product_if_quantity_zero')]
public function deleteProductIfQuantityZero($id, ManagerRegistry $doctrine): Response
{
    $product = $doctrine->getRepository(Product::class)->find($id);

    // Vérifiez si la quantité est épuisée avant la suppression
    if ($product && $product->getQte() === 0) {
        $manager = $doctrine->getManager();
        $manager->remove($product);
        $manager->flush();

        $this->addFlash('success', 'Le produit a été supprimé car la quantité est épuisée.');
    } else {
        // Ajouter un message d'erreur ou de notification si la quantité n'est pas épuisée
        $this->addFlash('warning', 'Impossible de supprimer le produit car la quantité n\'est pas épuisée.');
    }

    return $this->redirectToRoute('OnShowAddProduct');
}


}