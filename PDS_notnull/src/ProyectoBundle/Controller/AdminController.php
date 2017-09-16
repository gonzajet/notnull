<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProyectoBundle:admin:index.html.twig');
    }
        
    /*    $em = $this->getDoctrine()->getManager();

        $autos = $em->getRepository('ProyectoBundle:Auto')->findAll();

        return $this->render('ProyectoBundle:Auto:index.html.twig', array(
            'autos' => $autos,
        ));
    }
    */ 
    
    
    public function addAction() {
        return new Response ('Agregar usuario');
        
    }
    
    #-----VER ESTA PROBLEMA---------------------
    public function contacto2Action() {
        return $this ->render ('ProyectoBundle:index_contacto.php');
        
    }
    
    public function contactoAction () {
        return $this ->render ('ProyectoBundle:admin:contacto.html.twig');
    }
    public function editAction($id){
        return new Response ('editar usario '. $id );
        
    }
}
