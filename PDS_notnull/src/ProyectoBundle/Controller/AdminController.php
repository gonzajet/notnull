<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ProyectoBundle\Entity\Contacto;
use Symfony\Component\HttpFoundation\Request;
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
    public function contactoAction (Request $request) {
        $contacto= new Contacto();
        $form = $this->createForm('ProyectoBundle\Form\ContactoType', $contacto);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contacto);
            $em->flush();
            
            
        }
         return $this->render('ProyectoBundle:admin:contacto.html.twig', array(
            'contacto' => $contacto,
            'form' => $form->createView(),
        ));
        
      #  return $this ->render ('ProyectoBundle:admin:contacto.html.twig');
    }
    public function editAction($id){
        return new Response ('editar usario '. $id );
        
    }
}
