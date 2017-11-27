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
use ProyectoBundle\Entity\Usuario;

class AdminController extends Controller
{   
   
    public function indexAction()
    {
        $mensaje = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Contacto')
            ->findAll();


        return $this->render('ProyectoBundle:admin:index.html.twig', array('mensaje' =>$mensaje));
    }
   

    public function usuariosAction() {

        $usuarios = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Usuario')
            ->findAll();
        $mensaje = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Contacto')
            ->findAll();


        return $this->render('ProyectoBundle:admin:usuarios.html.twig', array('usuarios' => $usuarios,'mensaje' =>$mensaje ));

    }







        

    public function headerAction() {
       return $this->render('ProyectoBundle:head_footer:head.html.twig');
        
    
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
            $message2 = $form['mensaje']->getData(); #obtengo para el admin pero no lo seteo
            
            
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
            
            #MAIL PARA EL ADMIN
            $message2 = \Swift_Message::newInstance()
 
               ->setSubject('Nuevo correo de usuario')
               ->setFrom($email)
               ->setTo('pds.estacionar@gmail.com')
               ->setBody($this->renderView('ProyectoBundle:admin:mailadmin.html.twig',
                       array('mensaje' => $message2 ,'email' => $email, 'nombre' => $name)), 'text/html');
 
            $this->get('mailer')->send($message2);
            
        /*#Si todo esta bien, reenvio a la pagina de inicio*/
           echo "<script type=\"text/javascript\">alert(\"Mensaje enviado correctamente\");</script>"; 
            return $this->redirectToRoute('proyecto_homepage');
            
           
            
        } 
        #sino lo envio de nuevo. al contacto
         return $this->render('ProyectoBundle:admin:contacto.html.twig', array(
            'form' => $form->createView(),
        ));
        
    
    
    }
 
    

    
    
    
    
    public function aboutAction(){
        return $this->render('ProyectoBundle:admin:about.html.twig');
        
    }
}
