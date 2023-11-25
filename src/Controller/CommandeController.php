<?php

namespace App\Controller;
use Knp\Snappy\Pdf;
use App\Entity\Commande;
use App\Form\CommandeType;
use App\Entity\Lineorder;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

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

public function confirmOrder(Request $request, ManagerRegistry $man): Response
{
    $entityManager = $man->getManager();
    $commande = new Commande();
   
    $form = $this->createForm(CommandeType::class, $commande);
    $form->handleRequest($request);
 
        

        // Update the existing Commande entity with confirmation details
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

    return $this->render('commande/pdf.html.twig', [
        'form' => $form->createView(),
        'commande' => $commande,
    ]);
}

// ...
}