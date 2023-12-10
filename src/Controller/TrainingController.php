<?php

namespace App\Controller;

use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FormationRepository;
use App\Service\FileUploader;
use App\Form\FormationType;
use App\Entity\Formation;
use App\Entity\Commentaire;
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
        'user'=>$user 
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
    public function bookTraining(ManagerRegistry $manager,string $idFormation,SessionInterface $session)
    {
        $user=$session->get('user');
    // Récupérez la formation en fonction de $idFormation
    $em = $manager->getManager();
        $formation = $em->getRepository(Formation::class)->find($idFormation);
        if (!$formation) {
            throw $this->createNotFoundException('Formation not found for ID: $idFormation');
        }
    return $this->render('training/book.html.twig', [
        'formation' => $formation,
        'user'=>$user 
    ]);
    }




    #[Route('/checkcomm/{idFormation}', name: 'checkTraining')]
    public function CheckFormation(SessionInterface $session,ManagerRegistry $manager, Request $request, int $idFormation): Response
    {
        $user=$session->get('user');
        $em = $manager->getManager();
        $formation = $em->getRepository(Formation::class)->find($idFormation);
    
        if (!$formation) {
            throw $this->createNotFoundException("Formation not found for ID: $idFormation");
        }
    
        if ($request->isMethod('POST')) {
            $commentText = $request->request->get('comment_text');
            $evaluation = $request->request->get('evaluation');
    
            // Perform any validation you need here
    
            $commentaire = new Commentaire();
            $commentaire->setIdUser($user->getId()); // Assuming you have a User entity with getId()
            $commentaire->setFormation($formation);
            $commentaire->setIdFormation($idFormation);
            $commentaire->setText($commentText);
            $commentaire->setEvaluation($evaluation);
            $commentaire->setDate(new \DateTime());
    
            $em->persist($commentaire);
            $em->flush();
    
            // Redirect to the same page or wherever you need after adding the comment
          
        }
    
        // Fetch comments for rendering on the page
        $commentaires = $em->getRepository(Commentaire::class)->findBy(['formation' => $formation]);
    
        return $this->render('training/NoInscription.html.twig', [
            'formation' => $formation,
            'commentaires' => $commentaires,
            'user'=>$user
        ]);
    }
    #[Route('/NOdeletecommentaire/{id}/{idFormation}', name: 'NO_delete_commentaire')]
    public function deleteNO_Inscription(CommentaireRepository $repo,$idFormation,ManagerRegistry $manager,$id):Response
    {
        $commentaire=$repo->find($id);
        $mr=$manager->getManager();
        $mr->remove($commentaire);
        $mr->flush();

        return $this->redirectToRoute('checkTraining',[
            'idFormation'=>$idFormation
        ]);

    }
    #[Route('/NOupdateComm/{id}/{idFormation}', name: 'NO_edit_commentaire')]
    public function NOupdatecommentaire(ManagerRegistry $managerRegistry,$id,$idFormation,CommentaireRepository $repo,Request $req): Response
    {
        $em = $managerRegistry->getManager();

        $commentaire  = $repo->find($id);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute('checkTraining',[
                'idFormation'=>$idFormation
            ]);
        }

        return $this->redirectToRoute('checkTraining',[
            'idFormation'=>$idFormation
        ]);
    }

   



}
