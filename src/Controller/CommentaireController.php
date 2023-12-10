<?php

namespace App\Controller;

use App\Form\CommentaireType;
use App\Entity\Commentaire;
use App\Repository\CommentaireRepository;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Formation;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class CommentaireController extends AbstractController
{
    #[Route('/commentaire', name: 'app_commentaire')]
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig');
    }
    #[Route('/addComm/{idFormation}', name: 'add_commentaire')]
    public function addCommentaire(SessionInterface $session,ManagerRegistry $manager, Request $request, int $idFormation): Response
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
    
        return $this->render('commentaire/tabbela.html.twig', [
            'formation' => $formation,
            'commentaires' => $commentaires,
            'user'=>$user
        ]);
    }
    


    #[Route('/allcommentaire', name:'all_commentaire')]
    public function getAll(CommentaireRepository $repo):Response
    {
        $list=$repo->findAll();
        return $this->render('commentaire/getComm.html.twig',[
            'commentaires'=>$list
        ]);

    }

    #[Route('/updateComm/{id}/{idFormation}', name: 'edit_commentaire')]
    public function updatecommentaire(ManagerRegistry $managerRegistry,$id,$idFormation,CommentaireRepository $repo,Request $req,SessionInterface $session): Response
    {
        $em = $managerRegistry->getManager();
        $user=$session->get('user');

        $commentaire  = $repo->find($id);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute('add_commentaire',[
                'idFormation'=>$idFormation
            ]);
        }

        return $this->renderForm('commentaire/addcommentaire.html.twig', [
            'form' => $form,
            'idFormation'=>$idFormation,
            'user'=>$user
            
        ]);
    }

    #[Route('/deletecommentaire/{id}/{idFormation}', name: 'delete_commentaire')]
    public function delete(CommentaireRepository $repo,$idFormation,ManagerRegistry $manager,$id):Response
    {
        $commentaire=$repo->find($id);
        $mr=$manager->getManager();
        $mr->remove($commentaire);
        $mr->flush();

        return $this->redirectToRoute('add_commentaire',[
            'idFormation'=>$idFormation
        ]);

    }

    #[Route('/Sharecommentaire/{id}', name: 'Share_commentaire')]

    public function shareOnFacebook($id, FormationRepository $repo): Response
    {
            $formation = $repo->find($id);
        // Assuming you have a route generating the URL for your content
        $facebookShareUrl = $this->generateUrl('one_formation', ['id' => $id], \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL);

        // Facebook share URL format
        return $this->render('formation/oneformation.html.twig', [
            'f' => $formation,
            'facebookShareUrl' => $facebookShareUrl,
        ]);
     
    }

   #[Route('/share', name: 'share')]
public function shareOnFacebookV3(): Response
{
    // Replace 'YOUR_APP_ID' with your actual Facebook App ID
    $facebookAppId = '788068436664746';

    // Set the text you want to share
    $textToShare = 'Hey! Check out this awesome content.';

    // Provide a placeholder URL
    $placeholderUrl = 'https://ibb.co/c8SCrY6';

    // Construct the Facebook share URL
    $facebookShareUrl = 'https://www.facebook.com/dialog/share?app_id=' . $facebookAppId .
        '&display=popup' .
        '&quote=' . urlencode($textToShare) .
        '&media=' . urlencode($placeholderUrl);

    // Redirect to the Facebook share URL
    return $this->redirect($facebookShareUrl);
}

    


  
}


