<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FormationRepository;
use App\Service\FileUploader;
use App\Form\FormationType;
use App\Entity\Formation;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Filesystem\Filesystem;

class TrainingController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/training', name: 'app_training')]
    public function index(): Response
    {
        return $this->render('training/index.html.twig', [
            'controller_name' => 'TrainingController',
        ]);
    }
    #[Route('/train', name: "training")]
public function shop(SessionInterface $session, FormationRepository $formationRepository, Filesystem $filesystem)
{
    $l = false;
    $user = $session->get('user');
    
    if ($user->getType() == 'FORMATEUR') {
        $l = true;
    }

    $formations = $formationRepository->findAll();

    $destinationDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/';

    foreach ($formations as $formation) {
        $videoPath = $formation->getVideo(); // Assuming getVideo() returns the video path

        // Check if the video path starts with "file:/C"
        if (strpos($videoPath, 'file:/C') === 0) {
            // Remove the "file:/" prefix
            $videoPathWithoutFile = substr($videoPath, 6);

            // Construct the destination path
            $destinationPath = $destinationDirectory . pathinfo($videoPathWithoutFile, PATHINFO_BASENAME);

            // Copy the file
            $filesystem->copy($videoPathWithoutFile, $destinationPath, true);
        }
    }

    return $this->render('training/train.html.twig', [
        'training' => $formations,
        'L' => $l,
    ]);
}

    

    
    #[Route('/like/{id}', name: 'like_formation')]
    public function likeFormation(int $id,FormationRepository $repo): Response
{
    
    $formation=$repo->findOneById($id);
    // Increment the likes
    $likes = $formation->getLikes();
    $formation->setLikes($likes + 1);

    // Persist the changes
    $this->entityManager->persist($formation);
    $this->entityManager->flush();

    return $this->redirectToRoute('app_training');
    }



    #[Route('/booktraining/{idFormation}', name: 'book_training')]
    public function bookTraining(ManagerRegistry $manager,string $idFormation)
    {
    // Récupérez la formation en fonction de $idFormation
    $em = $manager->getManager();
        $formation = $em->getRepository(Formation::class)->find($idFormation);
        if (!$formation) {
            throw $this->createNotFoundException('Formation not found for ID: $idFormation');
        }
    return $this->render('training/book.html.twig', [
        'formation' => $formation,
    ]);
    }
}
