<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Repository\NotificationRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class BoutiqueController extends AbstractController
{
    #[Route('/boutique', name: 'app_boutique')]
    public function index(): Response
    {
        return $this->render('boutique/index.html.twig', [
            'controller_name' => 'BoutiqueController',
        ]);
    }

    #[Route('/shop', name: 'shopping')]
    public function shop(SessionInterface $session,ProductRepository $productRepository, NotificationRepository $notificationRepository): Response
    {

        $l=false;
        $user=$session->get('user');
        if($user->getType()=='VENDEUR')
        {
            $l=true;
        }

        $product = $productRepository->findAll();
        $notifications = $notificationRepository->findAll();

        return $this->render('boutique/shop.html.twig', [
            'produit' => $product,
            'notifications' => $notifications,
            'L'=>$l
        ]);
    }

    #[Route('/fetch-notifications', name: 'fetch_notifications')]
    public function fetchNotifications(ManagerRegistry $managerRegistry): JsonResponse
    {
        $notifications = $managerRegistry->getRepository(Notification::class)->findAll();

        $formattedNotifications = [];
        foreach ($notifications as $notification) {
            $formattedNotifications[] = [
                'content' => $notification->getContent(),
                // Add other fields as needed
            ];
        }

        return new JsonResponse(['notifications' => $formattedNotifications]);
    }
}