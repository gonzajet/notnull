<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;


class SecurityController extends Controller
{    /**
     * @Route("/login", name="login")
     */
//    public function loginAction(Request $request)
//     {
//        $authUtils = $this->get('security.authentication_utils');
//        // get the login error if there is one
//        $error = $authUtils->getLastAuthenticationError();
//    
//        // last username entered by the user
//        $lastUsername = $authUtils->getLastUsername();
//    
//        return $this->render('ProyectoBundle:usuario:login.html.twig', array(
//            'last_username' => $lastUsername,
//            'error'         => $error,
//        ));   
//     }
    public function loginAction(Request $request){
        $authenticationUtils = $this->get('security.authentication_utils');
        
        $error = $authenticationUtils->getLastAuthenticationError();
        
        $lastUsername = $authenticationUtils->getLastUsername();
        
        
        
        return $this->render('ProyectoBundle:usuario:login.html.twig',array('last_username' => $lastUsername, 'error' => $error)
    );
    }            
}
