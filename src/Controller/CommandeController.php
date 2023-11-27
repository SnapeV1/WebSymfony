<?php

namespace App\Controller;
use App\Entity\Utilisateur;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Commande;
use App\Entity\Historique;
use App\Form\CommandeType;
use App\Entity\Lineorder;
use App\Repository\CommandeRepository;
use App\Repository\HistoriqueRepository;
use App\Repository\LineorderRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CommandeController extends AbstractController
{
   
    #[Route('/commande', name: 'app_commande')]
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }

    #[Route('/confirm-all-orders', name: 'confirm_all_orders')]
    public function confirmOrder(Request $request, ManagerRegistry $man, LineorderRepository $lineorderRepository,UtilisateurRepository $utilisateurRepository ): Response
    {
        $entityManager = $man->getManager();
        $commande = new Commande();
    
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);
      



// Create a new Commande entity


// Set the id_client using the user entity

        $commande->setId_client(2);
        $commande->setDate(new \DateTime());
    
        // Fetch line orders from the database
        $lineorders = $entityManager->getRepository(Lineorder::class)->findAll();
        dump($lineorders);
    
        $total = 0;
    
        foreach ($lineorders as $lineorder) {
            // Calculate the total for each line order and add it to the overall total
            $lineTotal = $lineorder->getPrix() * $lineorder->getQuantite();
            $total += $lineTotal;
        }
    
        // Set the total in the Commande entity
        $commande->setTotal($total);
    
        $entityManager->persist($commande);
        $entityManager->flush();
   
    
        foreach ($lineorders as $lineorder) {
            $historique = new Historique();
            $historique->setNumc($commande);
            $historique->setDateorder(new \DateTime());
            $historique->setProduct($lineorder->getProductname());
            $historique->setPrix($lineorder->getPrix());
            $historique->setQuantite($lineorder->getQuantite());
            $entityManager->persist($historique);
        }

        // Delete all LineOrder entities
        foreach ($lineorders as $lineorder) {
            $entityManager->remove($lineorder);
        }

        $entityManager->flush();

        // ... existing code ...
    
    
        // Generate PDF content after deleting line orders
        $pdfOptions = new Options();
        $pdfOptions->set('isHtml5ParserEnabled', true);
        $pdfOptions->set('isPhpEnabled', true);
    
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('commande/pdf.html.twig', [
            'form' => $form->createView(),
            'commande' => $commande,
            'lineorders' => $lineorders,
        ]);
    
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // Set the response headers for download
        $response = new Response($dompdf->output());
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'invoice.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);
    
        // Rediriger vers la nouvelle action de visualisation de la facture
        return $this->redirectToRoute('view_invoice', ['id' => $commande->getId_c()]);
    }
    #[Route('/view-invoice/{id}', name: 'view_invoice')]
    public function viewInvoice($id, CommandeRepository $commandeRepository, HistoriqueRepository $historiqueRepository): Response
    {
        // Retrieve the Commande entity
        $commande = $commandeRepository->find($id);

        if (!$commande) {
            // Handle not found scenario, e.g., redirect or show an error page
            throw $this->createNotFoundException('Invoice not found');
        }

        // Fetch historique records associated with the confirmed Commande
        $historiqueRecords = $historiqueRepository->findBy(['numC' => $commande->getId_c()]);

        return $this->render('commande/view_invoice.html.twig', [
            'commande' => $commande,
            'historiqueRecords' => $historiqueRecords,
        ]);
    }
}
    
    
   
