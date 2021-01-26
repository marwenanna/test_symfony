<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;


use App\Repository\UserRepository;
//use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/registration", name="security_registration")
     */
    public function registration(Request $request, ManagerRegistry $managerRegistry , 
    UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class ,$user);
        $form ->handleRequest($request);//symfony va faire le lien entre les donne des champs fu formulaire et la variable $user
        if($form->isSubmitted() && $form->isValid()){
            
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);         
            
            $em = $managerRegistry->getManager();
            $em->persist($user);
            $em->flush();


            return $this->redirectToRoute('security_login');

        }
        return $this->render('security/registration.html.twig',[
            'form' => $form->createView(),
            'title_name' => 'Inscription'
        ]);
        
    }



    /**
     * @Route("/login", name="security_login")
     */
    public function login(Request $request,AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        return $this->render('security/login.html.twig', [
            'error' => $error,
            'title_name' => 'Connexion'
             
        ]);


    }

    

    /**
     * @Route("/forgotten-password", name="forgotten_password")
     */
    public function forgotten_password(Request $request,AuthenticationUtils $utils)
    {
        
        return $this->render('security/forgot_pwd.html.twig', [
            
            'title_name' => 'Réinitialiser le mot de passe'
             
        ]);
    }

    /**
     * @Route("/msg-forgotten-password", name="msg-forgotten-password")
     */
    public function msg_forgotten_password(Request $request){
       
        $email = $request->request->get("_username");
        $post = $this->getDoctrine()->getRepository(User::class)->findBy(['email' => $email]);
        if($post){
           
        }
        return $this->render('security/msg_forgotten_password.html.twig', [
            
            'title_name' => 'Réinitialiser le mot de passe',
            'email' => $email,
            'posts' => $post 
        ]);
    }

    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout(){
        //return $this->redirectToRoute('security_login');
    }
}
