<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;



class SecurityController extends Controller
{
/**
 * @Route("/login", name="login")
 */
   public function loginAction(Request $request){
        $authUtils = $this->get('security.authentication_utils');
        $authenticationUtils = $this->get('security.authentication_utils');
        
        $error = $authenticationUtils->getLastAuthenticationError();
        
        $lastUsername = $authenticationUtils->getLastUsername();
        
        
        
        return $this->render('ProyectoBundle:usuario:login.html.twig',array('last_username' => $lastUsername, 'error' => $error)
    );
    }            
}
