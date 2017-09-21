<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ProyectoBundle\Form\ContactoType;
use ProyectoBundle\Entity\Contacto;

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
   
   
    #VER ESTA NO SIRVE..................................----
    public function contactoAction (Request $request) {
        $contacto= new Contacto();
        $form = $this->createForm('ProyectoBundle\Form\ContactoType', $contacto);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contacto);
            $em->flush();
            echo "<script type=\"text/javascript\">alert(\"Mensaje enviado correctamente\");</script>"; 
            return $this->render('ProyectoBundle:admin:contacto.html.twig');
            
           
            
        }
        #sino lo envio de nuevo. al contacto
         return $this->render('ProyectoBundle:admin:contacto.html.twig', array(
            'form' => $form->createView(),
        ));
        
    
    
    }
   
   #ESTA SIRVE 
    public function sendmailAction(Request $request){
        
        if ($request->getMethod() === "POST"){
            
            $email= $request->get("email");
            $mensaje = $request->get("mensaje");
            $nombre= $request->get("nombre");
            $asunto= $request->get("asunto");
            
            $mailer= $this->container->get('mailer');
            
            $mensaje = (new \Swift_Message('Nuevo correo de la pagina!'))
                    
                    ->setFrom($email)
                    ->setTo('pds.estacionar@gmail.com')
                    ->setSubject($asunto)
                    
                    ->setBody($mensaje);
            $this->get('mailer')->send($mensaje);
            
            echo "<script type=\"text/javascript\">alert(\"Mensaje enviado correctamente\");</script>"; 
            return $this->render('ProyectoBundle:Default:index.html.twig');
        }
        
        
  
        return $this->render('ProyectoBundle:admin:new.html.twig');
        
            
    }
            
    public function editAction($id){
        return new Response ('editar usario '. $id );
        
    }
}
