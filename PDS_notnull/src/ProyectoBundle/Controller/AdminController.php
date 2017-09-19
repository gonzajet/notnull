<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ProyectoBundle\Entity\Contacto;
use ProyectoBundle\Form\ContactoType;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProyectoBundle:admin:index.html.twig');
    }
    
    
    public function addAction() {
        $form = $this->createForm( ContactoType::class, new Contacto ());
        return $this->render ('ProyectoBundle:admin:contacto.html.twig', array('form' => $form->createView()));
    }
   
    
    #VER ESTA PORONGA..................................----
    public function contactoAction () {
        $em = $this->getDoctrine()->getManager();
        
        $contacto = $em->getRepository('ProyectoBundle:Contacto')->findAll();
        
        $form = $this->createForm( ContactoType::class, new Contacto ());
        return $this->render ('ProyectoBundle:admin:contacto.html.twig', array('form' => $form->createView()));
        
        
      #  return $this ->render ('ProyectoBundle:admin:contacto.html.twig');
    }
    public function editAction($id){
        return new Response ('editar usario '. $id );
        
    }
}
