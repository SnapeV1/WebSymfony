<?php

namespace App\Controller;

use App\Form\FormationType;
use App\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\FormationRepository;
use App\Service\FileUploader;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Filesystem\Filesystem;

class FormationController extends AbstractController
{
    #[Route('/formation', name: 'app_formation')]
    public function index(): Response
    {
        return $this->render('formation/index.html.twig', [
            'controller_name' => 'FormationController',
        ]);
    }
    #[Route('/addformation', name: 'add_formation')]
    public function addformation(ManagerRegistry $managerRegistry,Request $req, FileUploader $fileUploader): Response
    {
        $em = $managerRegistry->getManager();
        $formation = new Formation();
        $form = $this->createForm(FormationType::class,   $formation);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $videoFile = $form->get('video')->getData(); // Remplacez 'video' par le nom de votre champ de fichier vidéo
            if ($videoFile) {
                $videoFileName = $fileUploader->upload($videoFile);
                $formation->setVideo($videoFileName);
              
            }
            $em->persist($formation);
            $em->flush();
            //return new Response("formation ajoutée avec succes");
            return $this->redirectToRoute('all_formation');
        }   

        return $this->renderForm('formation/addformation.html.twig', [
            'f' => $form
        ]);
    }
    
    #[Route('/updateformation/{id}', name: 'update_formation')]
    public function updateformation(ManagerRegistry $managerRegistry,$id,FormationRepository $repo,Request $req, FileUploader $fileUploader): Response
    {
        $em = $managerRegistry->getManager();
        $formation = $repo->find($id);
        $form = $this->createForm(FormationType::class,   $formation);
        $form->handleRequest($req);
        if ($form->isSubmitted() and $form->isValid()) {
            $videoFile = $form->get('video')->getData(); // Remplacez 'video' par le nom de votre champ de fichier vidéo
            if ($videoFile) {
                $videoFileName = $fileUploader->upload($videoFile);
                $formation->setVideo($videoFileName);
            }
            $em->persist($formation);
            $em->flush();

            return $this->redirectToRoute('all_formation');
        }

        return $this->renderForm('formation/addformation.html.twig', [
            'f' => $form
        ]);
    }

    #[Route('/formation/{id}', name: 'one_formation')]
    public function getOne(FormationRepository $repo, $id):Response
    {
        $formation=$repo->find($id);

        return $this->render('formation/oneformation.html.twig',[
            'f'=>$formation
        ]);
    }


    #[Route('/allformation', name:'all_formation')]
    public function getAll(FormationRepository $repo, Filesystem $filesystem): Response
    {
        $list = $repo->findAll();

        // Specify the destination directory
        $destinationDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/';

       
        foreach ($list as $formation) {
            $videoPath = $formation->getVideo(); // Assuming getVideo() returns the video path

            // Check if the video path starts with "file:/C"
            if (strpos($videoPath, 'file:/C') === 0) {
                // Construct the destination path
                $videoPathWithoutFile = substr($videoPath, 6);

                $destinationPath = $destinationDirectory . pathinfo($videoPathWithoutFile, PATHINFO_BASENAME);

                // Copy the file
                $filesystem->copy($videoPathWithoutFile, $destinationPath, true);
            }
        }

        return $this->render('formation/getall.html.twig', [
            'formations' => $list
        ]);
    }

    #[Route('/deleteformation/{id}', name: 'delete_formation')]
    public function delete(FormationRepository $repo,ManagerRegistry $manager,$id):Response
    {
        $formation=$repo->find($id);
        $mr=$manager->getManager();
        $mr->remove($formation);
        $mr->flush();

        return $this->redirectToRoute('all_formation');

    }

    

     #[Route('/allformation/export', name: 'export_formations_excel')]
     public function exportFormationsExcel(FormationRepository $repo): Response
    {
        // Retrieve formations from the database
        $formations = $repo->findAll();

        // Create a new Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Add headers
        $headers = ['Title', 'Category', 'Price', 'Discount', 'Duration', 'Description'];
        foreach ($headers as $index => $header) {
            $sheet->setCellValueByColumnAndRow($index + 1, 1, $header);
        }

        // Add formation data
        foreach ($formations as $rowIndex => $formation) {
            $sheet->setCellValueByColumnAndRow(1, $rowIndex + 2, $formation->getTitre());
            $sheet->setCellValueByColumnAndRow(2, $rowIndex + 2, $formation->getCategories());
            $sheet->setCellValueByColumnAndRow(3, $rowIndex + 2, $formation->getPrix());
            $sheet->setCellValueByColumnAndRow(4, $rowIndex + 2, $formation->getRemise());
            $sheet->setCellValueByColumnAndRow(5, $rowIndex + 2, $formation->getDuree());
            $sheet->setCellValueByColumnAndRow(6, $rowIndex + 2, $formation->getDescription());
        }

        // Save Excel file
        $excelFilename = 'formations_export.xlsx';
        $excelFilePath = $this->getParameter('kernel.project_dir') . '/public/' . $excelFilename;

        $writer = new Xlsx($spreadsheet);
        $writer->save($excelFilePath);

        // Return the Excel file as a BinaryFileResponse
        return new BinaryFileResponse($excelFilePath);
    }


}
