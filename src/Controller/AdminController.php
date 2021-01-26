<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditUserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        
        $user = $this->getUser();
        return $this->render('admin/admin.html.twig', [
            'title_name' => 'Bienvenue',
        ]);
    }

    /**
     * @Route("/admin/settings", name="settings")
     */
    public function settings()
    {
        
        $user = $this->getUser();
        return $this->render('admin/settings.html.twig', [
            'title_name' => 'Paramètres',
        ]);
    }

    /**
     * @Route("/admin/users", name="users")
     */
    public function usersList(UserRepository $user) {
        return $this->render("admin/users.html.twig",[
            'users' => $user->findAll(),
            'title_name' => 'Liste des utilisateurs'
        ]);
    }

     /**
     * @IsGranted("ROLE_ADMIN") 
     * @Route("admin/users/modify/{id}", name="modify_users")
     */
    public function editUser(Request $request, User $user) {
       
        $form = $this->createForm(EditUserType::class,$user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
  
          return $this->redirectToRoute('users');
        }
  
        return $this->render('admin/editUser.html.twig', ['formUser' => $form->createView()]);
      }


}
