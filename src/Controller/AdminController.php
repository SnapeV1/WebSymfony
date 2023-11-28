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
    return $this->renderForm('admin/add.html.twig',[
        'f'=>$form
    ]);
}
#[Route('/updateaddproduct/{id}',name:'Product_updated_admin')]
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
    return $this->renderForm('admin/add.html.twig',[
    'f'=>$form
]);
}

#[Route('/adproduits', name: 'OnShowAddProductAdmin')]
public function getAll(ProductRepository $repo):Response
{
    $list=$repo->findAll();
    return $this->render('admin/admin.html.twig',[
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

#[Route('/export/pdf', name: 'export_pdf')]
public function exportPdf(Request $request, ProductRepository $repo): Response
{
    // Fetch the list of products from the repository
    $list = $repo->findAll();

    // Create a Dompdf instance with appropriate options
    $pdfOptions = new Options();
    $pdfOptions->set('defaultFont', 'Arial'); // Set the default font (adjust as needed)
    $productId = $list[0]->getIdpdts();
   

    $dompdf = new Dompdf($pdfOptions);
    $base64Image = base64_encode(file_get_contents('pictures/' .  $repo->findImageById($productId)));


    // Render the PDF template with the list of products
    $html = $this->renderView('admin/pdf.html.twig', ['list' => $list,'base64Image' => $base64Image]);

    // Load HTML content into Dompdf
    $dompdf->loadHtml($html);

    // Set paper size (A4 is used here)
    $dompdf->setPaper('A4', 'portrait');

    // Render PDF (first output the HTML content to PDF, then output the PDF content)
    $dompdf->render();

    // Stream the file to the browser with appropriate headers
    $response = new Response($dompdf->output());
    $response->headers->set('Content-Type', 'application/pdf');
    $response->headers->set('Content-Disposition', 'inline; filename="export.pdf"');

    return $response;
}
#[Route('/export/excel', name: 'export_excel')]
public function exportExcel(Request $request, ProductRepository $repo): Response
{
    // Fetch the list of products from the repository
    $list = $repo->findAll();

    // Create a new PhpSpreadsheet instance
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Add headers to the Excel file
    $sheet->setCellValue('A1', 'NameProduct');
    $sheet->setCellValue('B1', 'Price');
    $sheet->setCellValue('C1', 'Quantity');
    $sheet->setCellValue('D1', 'Category');
    $sheet->setCellValue('E1', 'Material');
    $sheet->setCellValue('F1', 'Description');
    $sheet->setCellValue('G1', 'Picture');

    // Add product data to the Excel file
    $row = 2;
    foreach ($list as $product) {
        $sheet->setCellValue('A' . $row, $product->getNom());
        $sheet->setCellValue('B' . $row, $product->getPrix());
        $sheet->setCellValue('C' . $row, $product->getQte());
        $sheet->setCellValue('D' . $row, $product->getCateg());
        $sheet->setCellValue('E' . $row, $product->getMatiere());
        $sheet->setCellValue('F' . $row, $product->getDescription());
        $sheet->setCellValue('G' . $row, $product->getImage());
        $row++;
    }

    // Create a response with the Excel file

    $writer = new Xlsx($spreadsheet);

    $response = new StreamedResponse(function () use ($writer) {
        $writer->save('php://output');
    });
    
    // Set headers for Excel download
    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    $response->headers->set('Content-Disposition', 'attachment;filename=export.xlsx');
    $response->headers->set('Cache-Control', 'max-age=0');

    // Set headers for Excel download

    return $response;
}
#[Route('/export/xml', name: 'export_xml')]
public function exportXml(Request $request, ProductRepository $repo): Response
{
    // Fetch the list of products from the repository
    $list = $repo->findAll();

    // Create an XML string
    $xmlString = '<?xml version="1.0" encoding="UTF-8"?>
        <products>';

    // Add product data to the XML string
    foreach ($list as $product) {
        $xmlString .= '
            <product>
                <NameProduct>' . $product->getNom() . '</NameProduct>
                <Price>' . $product->getPrix() . '</Price>
                <Quantity>' . $product->getQte() . '</Quantity>
                <Category>' . $product->getCateg() . '</Category>
                <Material>' . $product->getMatiere() . '</Material>
                <Description>' . $product->getDescription() . '</Description>
                <Picture>' . $product->getImage() . '</Picture>
            </product>';
    }

    $xmlString .= '
        </products>';

    // Create a response with the XML file
    $response = new Response($xmlString);

    // Set headers for XML download
    $response->headers->set('Content-Type', 'application/xml');
    $response->headers->set('Content-Disposition', 'attachment;filename=export.xml');
    $response->headers->set('Cache-Control', 'max-age=0');

    return $response;
}
}

    



