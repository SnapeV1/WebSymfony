<?php

namespace App\Controller;

use App\Entity\Conversation;
use App\Entity\Notification;
use App\Entity\Utilisateur;
use App\Repository\ConversationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\EncryptionService;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\VarDumper\VarDumper;


class ConversationController extends AbstractController
{ private $entityManager;
    

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/conversation', name: 'app_conversation')]
    public function index(): Response
    {
        return $this->render('conversation/index.html.twig', [
            'controller_name' => 'ConversationController',
        ]);
    }


    #[Route("/conversations/{user1Id}/{user2Id}", name: "display_conversations")]
    public function displayConversations(
        Request $request,
        int $user1Id,
        int $user2Id,
        ConversationRepository $conversationRepository,
        EncryptionService $encryptionService, // Inject the EncryptionService
        SessionInterface $session
    ): Response {
     
        // Fetch conversations for user1Id and user2Id
        $conversations = $conversationRepository->findBy([
            'iduser1' => $user1Id,
            'iduser2' => $user2Id,
        ]);

        // Fetch conversations for user2Id and user1Id
        $conversations2 = $conversationRepository->findBy([
            'iduser1' => $user2Id,
            'iduser2' => $user1Id,
        ]);
        foreach ($conversations as $conversation) {
           
        }
    
        // Update the isRead attribute for conversations2
        foreach ($conversations2 as $conversation) {
            $conversation->setIsRead(true);
            $this->entityManager->persist($conversation);
        }
        // Decrypt messages for conversations
        $decryptedConversations = [];
        foreach ($conversations as $conversation) {
            $decryptedMessage = $encryptionService->decrypt($conversation->getMsg(),5);
            $decryptedConversation = clone $conversation;
            $decryptedConversation->setMsg($decryptedMessage);
            $decryptedConversations[] = $decryptedConversation;
        }
    
        // Decrypt messages for conversations2
        $decryptedConversations2 = [];
        foreach ($conversations2 as $conversation) {
            $decryptedMessage = $encryptionService->decrypt($conversation->getMsg(),5);
            $decryptedConversation = clone $conversation;
            $decryptedConversation->setMsg($decryptedMessage);
            $decryptedConversations2[] = $decryptedConversation;
        }
    
        // Find the last dateMsg for conversations
        $lastDateMsg1 = !empty($conversations) ? end($conversations)->getDateMsg() : null;
    
        // Find the last dateMsg for conversations2
        $lastDateMsg2 = !empty($conversations2) ? end($conversations2)->getDateMsg() : null;
    
        // Fetch user entities
        $user1 = $this->entityManager->getRepository(Utilisateur::class)->find($user1Id);
        $user2 = $this->entityManager->getRepository(Utilisateur::class)->find($user2Id);
    
        // Determine usernames or set default values
        $username1 = $user1 ? $user1->getUsername() : 'User Not Found';
        $username2 = $user2 ? $user2->getUsername() : 'User Not Found';
$this->entityManager->flush();
        return $this->render('conversation/index.html.twig', [
            'conversations' => $decryptedConversations,
            'conversations2' => $decryptedConversations2,
            'username1' => $username1,
            'username2' => $username2,
            'lastDateMsg1' => $lastDateMsg1,
            'lastDateMsg2' => $lastDateMsg2,
            'iduser2' => $user2Id,
            'iduser1' => $user1Id
        ]);
    }
    
    
    
    #[Route('/select-receiver', name: 'select_receiver')]
    public function selectReceiver(Request $request, EntityManagerInterface $entityManager,SessionInterface $session): Response
    {
        $userRepository = $this->entityManager->getRepository(Utilisateur::class);
        $users = $userRepository->findAll();
        $user=$session->get('user');
        $user1Id=$user->getId();
       
        $notificationRepository = $this->entityManager->getRepository(Notification::class);
        $notifications = $notificationRepository->findBy(['iduser' => $user1Id]);
       
        // Store notifications in the session flash bag
        foreach ($notifications as $notification) {
            $this->addFlash('notification', $notification->getContent());
           
        }
       
        // Delete the retrieved notifications from the database
        foreach ($notifications as $notification) {
            $entityManager->remove($notification);
        }
    
        $entityManager->flush();
    
        return $this->render('conversation/select_receiver.html.twig', [
            'users' => $users,
            'user1Id' => $user1Id,
        ]);
    }


#[Route('/sendmessage/{user2Id}', name: 'send_message')]
public function sendMessage(
    int $user2Id,
    Request $request,
    ConversationRepository $conversationRepository,
    EntityManagerInterface $entityManager,
    EncryptionService $encryptionService,
    SessionInterface $session
): Response {
    $user=$session->get('user');
    $user1Id=$user->getId();

    // Get the sender and receiver users from the database
    $sender = $entityManager->getRepository(Utilisateur::class)->find($user1Id);
    $receiver = $entityManager->getRepository(Utilisateur::class)->find($user2Id);

    if (!$sender || !$receiver) {
        throw $this->createNotFoundException('User not found!');
    }

    $message = $request->request->get('message'); // Assuming the message is sent via POST request

    // Encrypt the message
    $encryptedMessage = $encryptionService->encrypt($message,5); // Replace 'yourSecretKey' with your actual secret key

    // Create a new conversation entity
    $newConversation = new Conversation();
    $newConversation->setIduser1($user1Id);
    $newConversation->setIduser2($user2Id);
    $newConversation->setDateMsg(new \DateTime());
    $newConversation->setMsg($encryptedMessage);

    // Persist and flush the new conversation entity
    $entityManager->persist($newConversation);
    $entityManager->flush();
    $notification = new Notification();
    $notification->setNotifDate(new \DateTime());
    $notificationContent = $sender->getUsername() . ' : "' . $message . '"   ' . $notification->getNotifDate()->format('Y-m-d H:i:s');
    $notification->setContent($notificationContent);
    $notification->setIduser($user2Id);
    $entityManager->persist($notification);
    $entityManager->flush();
    return $this->redirectToRoute('display_conversations', [
        'user1Id' => $user1Id,
        'user2Id' => $user2Id,
    ]);
    // Redirect to conversation index or appropriate route
}





#[Route('/messageDel/{id}/{user1Id}/{user2Id}', name: 'delete_message')]
public function delete_message(Request $request, EntityManagerInterface $entityManager, $id,$user1Id,$user2Id,SessionInterface $session): Response
{
    
   
        $user=$session->get('user');
        $user1Id=$user->getId();
    // Find the group from the database
    $conv = $entityManager->getRepository(Conversation::class)->find($id);


    if ($conv instanceof Conversation) {
        // Update the group name
        $conv->setMsg("Rjxxflj Zsxjsy");
        



$entityManager->flush();

return $this->redirectToRoute('display_conversations', [
    'user1Id' => $user1Id,
    'user2Id' => $user2Id,
]);
}

return new Response('Message not found', Response::HTTP_NOT_FOUND);
}



// ...
#[Route("/sse-conversations/{user1Id}/{user2Id}", name: "sse_conversations")]
public function sseConversations(){
    /*
    Request $request,
    int $user1Id,
    int $user2Id,
    ConversationRepository $conversationRepository,
    EncryptionService $encryptionService
): StreamedResponse {
    $receiverId = (int)$request->query->get('receiverId', 0); // Default to 0 if not provided

    // Set the response as a stream and specify the content type
    $response = new StreamedResponse(function () use ($user1Id, $user2Id, $receiverId, $conversationRepository, $encryptionService) {
        // Send the appropriate headers for Server-Sent Events
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        // Fetch unread conversations for user1Id and user2Id
        $unreadConversations1 = $conversationRepository->findUnreadConversations($user1Id);
        $unreadConversations2 = $conversationRepository->findUnreadConversations($user2Id);

        // Prepare the data to be sent
        $eventData = [
            'reload' => false, // Default to no reload

            // Include sender (user1Id) and receiver (user2Id) in the eventData
            'senderId' => $user1Id,
            'receiverId' => $user2Id,
        ];

        // Check if there are unread conversations for the receiver
        if (($user1Id === $receiverId && !empty($unreadConversations1)) ||
            ($user2Id === $receiverId && !empty($unreadConversations2))) {
            // Mark conversations as read (you may need to implement this logic)

            // Set reload to true if unread conversations exist
            $eventData['reload'] = true;
        }

        // Send the eventData as JSON
        echo 'data: ' . json_encode($eventData) . "\n\n";

        // Flush the output to ensure it's sent to the client
        ob_flush();
        flush();
    });

    // Set the appropriate headers for Symfony StreamedResponse
    $response->headers->set('Content-Type', 'text/event-stream');
    $response->headers->set('Cache-Control', 'no-cache');
    $response->headers->set('Connection', 'keep-alive');

    return $response;*/
}





}
   

