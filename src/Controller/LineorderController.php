<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Lineorder;
use App\Form\LineorderType;
use App\Entity\Product;
use App\Form\CommandeType;
use App\Repository\ProductRepository;
use App\Repository\LineorderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LineorderController extends AbstractController
{
    #[Route('/add-to-cart/{id}', name: 'add_to_cart')]
    public function addToCart(
        $id,
        ProductRepository $productRepository,
        EntityManagerInterface $entityManager,
        SessionInterface $session,
        Request $request
    ): Response {
        $product = $productRepository->find($id);
    
        // Get quantity from the form submission
        $quantity = $request->request->get('quantity');
    
        // Create a Lineorder entity and set its properties
        $lineorder = new Lineorder();
        $lineorder->setProductname($product->getNom());
        $lineorder->setQuantite($quantity);
        $lineorder->setPrix($product->getPrix()); // Set the price from the product
    
        // Persist the Lineorder entity
        $entityManager->persist($lineorder);
        $entityManager->flush();
    
        // Add the Lineorder ID to the session-based cart
        $cart = $session->get('cart', []);
        $cart[] = $lineorder->getIdO(); // Use the Lineorder ID or any unique identifier
        $session->set('cart', $cart);
    
        $this->addFlash('success', 'Product added to the cart successfully!');
    
        // Redirect back to the shop page
        
        return $this->redirectToRoute('shopping');
    }
    #[Route('/get-lineorders', name: 'view_cart')]
    public function getLineorders(ManagerRegistry $man, Request $request): Response
    {
        $entityManager = $man->getManager();
        $lineorders = $entityManager->getRepository(Lineorder::class)->findAll();
    
        $commande = new Commande();
        $commande->setId_client(2); // Set a fixed value for id_client
    
        $editForm = $this->createForm(LineorderType::class, null, [
            'action' => $this->generateUrl('edit_lineorder', ['id' => 0]),
        ]);
    
        $confirmationForm = $this->createForm(CommandeType::class, $commande);
        $confirmationForm->handleRequest($request);
    
        if ($confirmationForm->isSubmitted() && $confirmationForm->isValid()) {
           
            $commande->setDate(new \DateTime());
    
            $total = 0;
    
            foreach ($lineorders as $lineorder) {
                // Calculate the total for each line order and add it to the overall total
                $lineTotal = $lineorder->getPrix() * $lineorder->getQuantite();
                $total += $lineTotal;
            }
    
            $commande->setTotal($total);
    
            // Persist the Commande entity
            $entityManager->persist($commande);
            $entityManager->flush();
    
            // Redirect to the page with the line orders after confirmation
            return $this->redirectToRoute('view_cart');
        }
    
        return $this->render('lineorder/getcart.html.twig', [
            'lineorders' => $lineorders,
            'editForm' => $editForm->createView(),
            'confirmationForm' => $confirmationForm->createView(),
        ]);
        
    }
    
    
    
  

    #[Route('/delete-lineorder/{id}', name: 'delete_lineorder')]
public function deleteLineorder($id, EntityManagerInterface $entityManager): Response
{
    $lineorder = $entityManager->getRepository(Lineorder::class)->find($id);

    if (!$lineorder) {
        throw $this->createNotFoundException('Lineorder not found');
    }

    // Remove the Lineorder from the database
    $entityManager->remove($lineorder);
    $entityManager->flush();

    $this->addFlash('success', 'Lineorder deleted successfully!');

    // Redirect to the page displaying all line orders
    return $this->redirectToRoute('view_cart');
}
#[Route('/edit-lineorder/{id}', name: 'edit_lineorder')]
public function editLineorder($id, EntityManagerInterface $entityManager, Request $request): Response
{
    $lineorder = $entityManager->getRepository(Lineorder::class)->find($id);

    if (!$lineorder) {
        throw $this->createNotFoundException('Lineorder not found');
    }

    $form = $this->createForm(LineorderType::class, $lineorder);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Update the quantity in the Lineorder entity
        $lineorder->setQuantite($form->get('quantite')->getData());

        // Persist the changes to the database
        $entityManager->flush();

        // Add a flash message or perform other actions as needed

        // Redirect back to the page with the line orders
        return $this->redirectToRoute('view_cart');
    }

    // Render the form or handle the error as needed

    return $this->render('lineorder/edit.html.twig', [
        'form' => $form->createView(),]);
    }
    // In your LineorderController
}

