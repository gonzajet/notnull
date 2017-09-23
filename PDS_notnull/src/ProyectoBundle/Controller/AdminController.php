<?php

namespace ProyectoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use ProyectoBundle\Entity\Contacto;

class AdminController extends Controller
{   
   
    public function indexAction()
    {
        return $this->render('ProyectoBundle:admin:index.html.twig');
    }
   
    
    public function addAction(Request $request) {
        
    
    }
    
   
    
    #VER ESTA..................................----
    public function contactoAction (Request $request) {
     
        $contacto= new Contacto();
        $form = $this->createForm('ProyectoBundle\Form\ContactoType', $contacto);
        $form->handleRequest($request);
        #chequeo si es valido el form
        if ($form->isSubmitted() && $form->isValid()) {
            $name = $form['nombre']->getData();
            $email = $form['email']->getData();
            $subject = $form['subject']->getData();
            $message = $form['mensaje']->getData();
            
         #realizo los set de la data   
            $contacto->setNombre($name);
            $contacto->setEmail($email);          
            $contacto->setSubject($subject);     
            $contacto->setMensaje($message);  
            
         #guardo datos en la DB
            $em = $this->getDoctrine()->getManager();      
            $em -> persist($contacto);
            $em -> flush();
            
         #PARTE DEL MAIL
            $message = \Swift_Message::newInstance()
 
               ->setSubject($subject)
               ->setFrom('pds.estacionar@gmail.com')
               ->setTo($email)
               ->setBody($this->renderView('ProyectoBundle:admin:sendmail.html.twig',array('nombre' => $name)),'text/html');
 
            $this->get('mailer')->send($message);
            
        #Si todo esta bien, reenvio a la pagina de inicio
            echo "<script type=\"text/javascript\">alert(\"Mensaje enviado correctamente\");</script>"; 
            return $this->render('ProyectoBundle:Default:index.html.twig');
            
           
            
        }
        #sino lo envio de nuevo. al contacto
         return $this->render('ProyectoBundle:admin:contacto.html.twig', array(
            'form' => $form->createView(),
        ));
        
    
    
    }
 
    
 /* NO SIRVE MAS
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
    */
    
    
    
    
    public function editAction($id){
        return new Response ('editar usario '. $id );
        
    }
}
