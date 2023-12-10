<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Utilisateur;
use App\Form\ReclamationAnswerType;
use App\Form\ReclamationSendType;
use App\Repository\ReclamationRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationController extends AbstractController
{
    #[Route('/reclamation', name: 'app_reclamation')]
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }

    #[Route('/reclamationall', name: 'all_reclamation')]
    public function getAll(ReclamationRepository $repo,SessionInterface $session):Response
    {
        $user=$session->get('user');
        $list=$repo->findAll();
        return $this->render('reclamation/getall.html.twig',[
            'list'=>$list,
            'user'=>$user 
        ]);
    }

    #[Route('/reclamation/{id}', name: 'one_reclamation')]
    public function getOne(ReclamationRepository $repo, $id,SessionInterface $session):Response
    {
        $user=$session->get('user');
        $reclam=$repo->find($id);
        return $this->render('reclamation/one.html.twig',[
            'reclam'=>$reclam,
            'user'=>$user 
        ]);
    }

    #[Route('/reclamationdelete/{id}', name: 'delete_reclamation')]
    public function delete(ReclamationRepository $repo,ManagerRegistry $manager,$id):Response
    {
        $reclam=$repo->find($id);
        $mr=$manager->getManager();
        $mr->remove($reclam);
        $mr->flush();

        return $this->redirectToRoute('my_reclamation');

    }

    #[Route('/reclamer', name: 'add_reclamation')]
    public function add(ManagerRegistry $man, Request $req, SessionInterface $session,UtilisateurRepository $uRepo): Response
    {
        $user= $uRepo->find($session->get('user')->getId());
       
        if(!$user){
            return $this->redirectToRoute('login_utilisateur');
        }else{

        $rec=new Reclamation();
        $maanger=$man->getManager();
       
        $form=$this->createForm(ReclamationSendType::class,$rec);
        $form->handleRequest($req);
        if($form->isSubmitted())
        {
            $rec->setEtat('WAITING');
            $rec->setSender($user);
            $maanger->persist($rec);
            $maanger->flush();
           return  $this->redirectToRoute('my_reclamation');
        }
        return $this->renderForm('reclamation/add.html.twig',[
            'f'=>$form,
            'user'=>$user 
        ]);
    }
    }

    #[Route('/reclamationanswer/{id}', name: 'answer_reclamation')]
    public function answer(ManagerRegistry $man, Request $req, ReclamationRepository $repo,$id, SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(!$user){
            return $this->redirectToRoute('login_utilisateur');
        }else{
        
        $rec=$repo->find($id);
        $maanger=$man->getManager();
    
        $form=$this->createForm(ReclamationAnswerType::class,$rec);
        $form->handleRequest($req);
        if($form->isSubmitted())
        {
            $rec->setEtat('ANSWERED');

            $maanger->persist($rec);
            $maanger->flush();
           return  $this->redirectToRoute('all_reclamation');
        }
        return $this->renderForm('reclamation/respond.html.twig',[
            'f'=>$form,
            'user'=>$user 
        ]);
    }
    }


    #[Route('/mymessages', name: 'my_reclamation')]
    public function getReclamationById(ReclamationRepository $repo, SessionInterface $session):Response
    {
        $user = new Utilisateur();
        $user= $session->get('user');
        if($user === null || $user->getId()===null){
          return  $this->redirectToRoute('login_utilisateur');
        }


        $list=$repo->getBySenderId($user->getId());

        return  $this->render('reclamation/myMessages.html.twig',[
            'list'=> $list,
            'user'=>$user 
        ]);
    }


    #[Route('/reclamationseeanswer/{id}', name: 'seeAnswer_reclamation')]
    public function seeAnswer(Request $req, ReclamationRepository $repo,$id,SessionInterface $session):Response
    {
        $user=$session->get('user');
        $form = $this->createFormBuilder()
        ->add('contenu', TextareaType::class,[
           
            'label'=>'Your message.',
        ]) 
        ->add('reponse', TextareaType::class,[
            
            'label'=>'Our team response.',
        ]) 
        ->add('Respond', SubmitType::class,[
            'label' => 'Back',
        ])
        ->getForm();

        $rec=$repo->find($id);

        $form->get('contenu')->setData($rec->getContenu());
        $form->get('reponse')->setData($rec->getReponse());

        $form->handleRequest($req);
        if($form->isSubmitted())
        {
            return $this->redirectToRoute('my_reclamation');
        }
        


        return $this->renderForm('reclamation/respond.html.twig',[
            'f'=>$form,
            'user'=>$user 
        ]);
    }


}
