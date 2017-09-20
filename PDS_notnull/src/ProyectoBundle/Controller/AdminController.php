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
   
   
    #VER ESTA..................................----
    public function contactoAction (Request $request) {
        $contacto= new Contacto();
        $form = $this->createForm('ProyectoBundle\Form\ContactoType', $contacto);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contacto);
            $em->flush();
            echo "<script type=\"text/javascript\">alert(\"Mensaje enviado correctamente\");</script>"; 
            return $this->render('ProyectoBundle:Default:index.html.twig');#Ruta para mandar luego de poner aceptar
           
            
        }
        #sino lo envio de nuevo. al contacto
         return $this->render('ProyectoBundle:admin:contacto.html.twig', array(
            'form' => $form->createView(),
        ));
        
    
    
    }
    
  
    public function editAction($id){
        return new Response ('editar usario '. $id );
        
    }
}
