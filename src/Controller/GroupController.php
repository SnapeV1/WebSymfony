<?php

namespace App\Controller;

use App\Entity\Groups;
use App\Entity\Membre;
use App\Entity\Utilisateur;
use App\Form\GroupType;
use App\Repository\GroupsRepository;
use App\Repository\MembreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class GroupController extends AbstractController
{
    #[Route('/index', name: 'app_group')]
    public function index(): Response
    {
        return $this->render('group/index.html.twig', [
            'controller_name' => 'GroupController',
        ]);
    }

    #[Route('/getGroups', name: 'groups_getall')]
    public function getAllForUser(EntityManagerInterface $entityManager,GroupsRepository $repo, MembreRepository $membreRepo, ManagerRegistry $manager, Request $req, SessionInterface $session): Response
    {
        $user= $session->get('user');
        if($user === null || $user->getId()===null){
          return  $this->redirectToRoute('login_utilisateur');
        }
$userid=$user->getId();
        $membres = $membreRepo->findBy(['user' => $userid, 'role' => 'Admin']);
        
     
        if ($membres) {
          
            $groups = [];
    
            
            foreach ($membres as $membre) {
               
                $group = $repo->find($membre->getGroup()->getId());
    
               
                if ($group) {
                    $logoPath = $group->getLogo(); // Assuming getLogo() returns the logo path
                  
                    if (strpos($logoPath, 'C:\\') === 0) {
                        // Logo path starts with 'c:/', move the file
                        $uploadsDirectory = $this->getParameter('uploads_directory');
                        
                        // Extract filename from the original path
                        $filename = pathinfo($logoPath, PATHINFO_BASENAME);
                        
                        // Define the new path
                        $newPath = $uploadsDirectory . '/' . $filename;
                     
                        if (copy($logoPath, $newPath)) {
                          
                        } else {
                            // Handle the case where the file move fails
                            // You can log an error, throw an exception, or handle it as needed
                        }
                        
                    }
                    $groups[] = $group;
                    $member2 = $entityManager->getRepository(Membre::class)->findBy(['group' => $group->getid()]);
                    $group->updatesize($member2);
               






                    
                    
                }
            }
            

        } else {
            
            $groups = [];
        }
        
    
        return $this->render('group/getall.html.twig', [
            'groups' => $groups,
            'userid' => $userid
        ]);
    }
    
    
    



    #[Route('/addGroup', name: 'addgroup')]
    public function addGroup(EntityManagerInterface $entityManager,ManagerRegistry $manager, Request $req,ValidatorInterface $validator,SessionInterface $session): Response
    {
        $user=$session->get('user');
        $em = $manager->getManager();
        $groups = new Groups();
        $form = $this->createForm(GroupType::class, $groups);
        $form->handleRequest($req);
        $userid=$user->getId();
        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['logo']->getData();

            if ($uploadedFile) {
                $newFilename = uniqid().'.'.$uploadedFile->guessExtension();

                // Define the directory to store uploaded files
                $uploadsDirectory = $this->getParameter('uploads_directory');

                // Move the uploaded file to the defined directory
                $uploadedFile->move($uploadsDirectory, $newFilename);

                // Set the 'logo' property of the entity as the file path
                $groups->setLogo("uploads".'/'.$newFilename);
            }
            $user = $entityManager->getRepository(Utilisateur::class)->find($userid);
            $membre = new Membre();
            $membre->setUser($user);
            $membre->setGroup($groups);
            $membre->setRole('Admin');

            $groups->setSize(1);
            $em->persist($groups);
            $em->persist($membre);
            $em->flush();

            return $this->redirectToRoute('groups_getall', ['userid' => $userid]);

        }

        return $this->renderForm('group/add.html.twig', [
            'f' => $form,
            'userid' => $userid
        ]);
    }

    #[Route('/deletegroup/{id}', name: 'deletegroup')]
public function deletegroup($id, EntityManagerInterface $entityManager, GroupsRepository $repo,SessionInterface $session): Response
{
    $user=$session->get('user');
    $userid=$user->getId();
    $emm = $entityManager;
    $query = $entityManager->createQuery(
        'SELECT m FROM App\Entity\Membre m WHERE m.group = :id'
    )->setParameter('id', $id);

    $members = $query->getResult();

    // Delete all members in 'Membre' table where 'GroupID' matches the provided ID
    foreach ($members as $member) {
        $emm->remove($member);
    }
    $emm->flush();

    // After deleting the members, delete the group
    $group = $repo->find($id);
    if ($group) {
        $emm->remove($group);
        $emm->flush();
    }

    return $this->redirectToRoute('groups_getall', ['userid' => $userid]);
}

#[Route('/editgroup/{id}', name: 'update_group')]
public function updateGroup(Request $request, EntityManagerInterface $entityManager, $id,SessionInterface $session): Response
{
    // Find the group from the database
    $group = $entityManager->getRepository(Groups::class)->find($id);
    $user=$session->get('user');
    $userid=$user->getId();
    // Get the new group name from the form submission
    $newGroupName = $request->request->get('group_name');

    if ($group instanceof Groups) {
        
        $group->setNom($newGroupName);
        $uploadedFile = $request->files->get('group_logo_file');


        if ($uploadedFile) {
            $newFilename = uniqid().'.'.$uploadedFile->guessExtension();

            // Define the directory to store uploaded files
            $uploadsDirectory = $this->getParameter('uploads_directory');

            // Move the uploaded file to the defined directory
            $uploadedFile->move($uploadsDirectory, $newFilename);

            // Set the 'logo' property of the entity as the file path
            $group->setLogo("uploads".'/'.$newFilename);
        }


$entityManager->flush();

return $this->redirectToRoute('groups_getall', ['userid' => $userid]);
}

return new Response('Group not found', Response::HTTP_NOT_FOUND);
}









//ADMIN

#[Route('/admin/getGroups', name: 'Admingroups_getall')]
public function getAllForAdmin(SessionInterface $session,EntityManagerInterface $entityManager,GroupsRepository $repo, MembreRepository $membreRepo, ManagerRegistry $manager, Request $req): Response
{
    $groups = $repo->findAll();
    $user=$session->get('user');
    
    return $this->render('group/Admingetall.html.twig', [
        'groups' => $groups,
    ]);
}



#[Route('/admin/deletegroup/{id}', name: 'admin_deletegroup')]
public function Admin_deletegroup($id, EntityManagerInterface $entityManager, GroupsRepository $repo): Response
{
    $emm = $entityManager;
    $query = $entityManager->createQuery(
        'SELECT m FROM App\Entity\Membre m WHERE m.group = :id'
    )->setParameter('id', $id);

    $members = $query->getResult();

    // Delete all members in 'Membre' table where 'GroupID' matches the provided ID
    foreach ($members as $member) {
        $emm->remove($member);
    }
    $emm->flush();

    // After deleting the members, delete the group
    $group = $repo->find($id);
    if ($group) {
        $emm->remove($group);
        $emm->flush();
    }

    return $this->redirectToRoute('Admingroups_getall');
}



#[Route('/admin/editgroup/{id}', name: 'admin_updategroup')]
public function AdminupdateGroup(Request $request, EntityManagerInterface $entityManager, $id): Response
{
    // Find the group from the database
    $group = $entityManager->getRepository(Groups::class)->find($id);

    // Get the new group name from the form submission
    $newGroupName = $request->request->get('group_name');

    if ($group instanceof Groups) {
        
        $group->setNom($newGroupName);
        $uploadedFile = $request->files->get('group_logo_file');


        if ($uploadedFile) {
            $newFilename = uniqid().'.'.$uploadedFile->guessExtension();

            // Define the directory to store uploaded files
            $uploadsDirectory = $this->getParameter('uploads_directory');

            // Move the uploaded file to the defined directory
            $uploadedFile->move($uploadsDirectory, $newFilename);

            // Set the 'logo' property of the entity as the file path
            $group->setLogo("uploads".'/'.$newFilename);
        }


$entityManager->flush();

return $this->redirectToRoute('Admingroups_getall');
}

return new Response('Group not found', Response::HTTP_NOT_FOUND);
}




}