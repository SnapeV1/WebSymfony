<?php

namespace App\Controller;

use App\Form\CommentaireType;
use App\Entity\Commentaire;
use App\Repository\CommentaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Formation;


class CommentaireController extends AbstractController
{
    #[Route('/commentaire', name: 'app_commentaire')]
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig');
    }
    #[Route('/addComm/{idFormation}', name: 'add_commentaire')]
    public function addCommentaire(ManagerRegistry $manager, Request $request, int $idFormation): Response
    {
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
            $commentaire->setIdUser(1); // Assuming you have a User entity with getId()
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

    #[Route('/updateComm/{id}', name: 'edit_commentaire')]
    public function updatecommentaire(ManagerRegistry $managerRegistry,$id,CommentaireRepository $repo,Request $req): Response
    {
        $em = $managerRegistry->getManager();

        $commentaire  = $repo->find($id);
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute('all_commentaire');
        }

        return $this->renderForm('commentaire/addcommentaire.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/deletecommentaire/{id}', name: 'delete_commentaire')]
    public function delete(CommentaireRepository $repo,ManagerRegistry $manager,$id):Response
    {
        $commentaire=$repo->find($id);
        $mr=$manager->getManager();
        $mr->remove($commentaire);
        $mr->flush();

        return $this->redirectToRoute('all_commentaire');

    }
    
  
}


