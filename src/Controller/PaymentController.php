<?php

namespace App\Controller;

use App\Entity\Formation;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Stripe\Exception\ApiErrorException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\PaymentMethod;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PaymentController extends AbstractController
{
    #[Route('/payment', name: 'app_payment')]
    public function index(): Response
    {
        return $this->render('payment/index.html.twig', [
            'controller_name' => 'PaymentController',
        ]);
    }
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }



    
    #[Route('/processpayment/{id}', name: 'process_payment')]
    public function processPayment(Request $request, int $id,EntityManagerInterface $entityManager,UrlGeneratorInterface $urlGenerator): Response
    {

        $formation = $entityManager->getRepository(Formation::class)->find($id);
       


        try {
            // Retrieve PaymentMethod ID from the request
            $paymentMethodId = $request->request->get('payment_method');

            // Log the received PaymentMethod ID (check your Symfony logs)
            $this->logger->info('Received PaymentMethod ID: ' . $paymentMethodId);

            // Set your secret key
            Stripe::setApiKey('sk_test_51OGMOXL0ywzjvxffB2ayVrBO79z8m1FZbjjf7GslABbmtvQDHwiuWnh9TVN9O6NqsOX0lejum8e2WHPwEgoH95nD00xZGMKnwR');

            // Create PaymentIntent on the server
            $paymentIntent = PaymentIntent::create([
                'amount' => $formation->getPrix()*100,
                'currency' => 'usd',
                'description' => 'Payment for ' . $formation->getTitre(),
                'payment_method' => $paymentMethodId,
                'confirm' => true,
                'payment_method_types' => ['card'], // Specify the valid payment method type
                'return_url' => $urlGenerator->generate('payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL),

            ]);

            return $this->render('payment/success.html.twig', [
                'amount' => $formation->getPrix(), // Pass the 'amount' variable to the template
                'clientSecret' => $paymentIntent->client_secret,
            ]);
        } catch (\Exception $e) {
            // Log the error (check your Symfony logs)
            $this->logger->error('Payment error: ' . $e->getMessage());

            // Handle payment errors
            return $this->render('payment/error.html.twig', [
                'errorMessage' => $e->getMessage(),
            ]);
        }
    }
    #[Route('/payment/success', name: 'payment_success')]
    public function success(): Response
    {
        return $this->render('payment/success.html.twig');
    }

    // ... (other methods)
}