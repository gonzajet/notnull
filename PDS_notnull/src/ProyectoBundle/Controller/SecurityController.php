<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class SecurityController extends Controller
{    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request){
        $authenticationUtils = $this->get('security.authentication_utils');
        
        $error = $authenticationUtils->getLastAuthenticationError();
        
        $lastUsername = $authenticationUtils->getLastUsername();
        
        return $this->render('ProyectoBundle:usuario:login.html.twig',array('last_username' => $lastUsername, 'error' => $error)
    );
    }
    public function loginCheckAction(Request $request)
    {
        $usuario = new Usuario();
        $usuario->setUsuario($request['_usuario']);
        $usuario->setPassword($request['_password']);
        
        
    }

  
            
}
