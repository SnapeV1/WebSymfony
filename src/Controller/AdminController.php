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

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/ajouteradminproduit', name:'add_product_admin')]
    public function addproduct (ManagerRegistry $man, Request $req, FileUploader $fileUploader): Response
{
    $product=new Product();
    $manager=$man->getManager();
    
    $form=$this->createForm(ProductType::class,$product);
    $form->handleRequest($req);
    if($form->isSubmitted()&& $form->isValid())
    {
        var_dump($form->getData()); // Debug to see form data

        $imageFile = $form->get('image')->getData();
        if ($imageFile) 
        {
            $imageFileName = $fileUploader->upload($imageFile);
            $product->setImage($imageFileName);
        }
        $manager->persist($product);
        $manager->flush();
        return $this->redirectToRoute('OnShowAddProduct');
    }
    return $this->renderForm('product/add.html.twig',[
        'f'=>$form
    ]);
}
#[Route('/updateadproduct/{id}',name:'Product_updated_admin')]
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
    
    return $this->redirectToRoute('OnShowAddProductAdmin');
    }
    return $this->renderForm('product/add.html.twig',[
    'f'=>$form
]);
}

#[Route('/adproduits', name: 'OnShowAddProductAdmin')]
public function getAll(ProductRepository $repo):Response
{
    $list=$repo->findAll();
    return $this->render('product/getall.html.twig',[
        'list'=>$list
    ]);

}
#[Route('/admindelete/{id}', name: 'delete_product_admin')]
public function delete(ProductRepository $repo,ManagerRegistry $manager,$id):Response
{
    $product=$repo->find($id);
    $mr=$manager->getManager();
    $mr->remove($product);
    $mr->flush();

    return $this->redirectToRoute('OnShowAddProductAdmin');

}



    
}


