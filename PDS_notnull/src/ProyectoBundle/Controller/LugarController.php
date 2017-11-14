<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use ProyectoBundle\Entity\Lugar;
use ProyectoBundle\Entity\SeccionLugar;
use Symfony\Component\HttpFoundation\Request;

class LugarController extends Controller
{
    public function indexAction()
    {     
        $repository = $this->getDoctrine()->getRepository('ProyectoBundle:SeccionLugar');
        $secciones = $repository->findAll();
        return $this->render('ProyectoBundle:Lugar:index.html.twig',array("secciones"=>$secciones) );
    }
    
    public function newAction(Request $request)
    {   
        $lugar = new Lugar();
        $form = $this->createForm('ProyectoBundle\Form\LugarType', $lugar);
        $repository = $this->getDoctrine()->getRepository('ProyectoBundle:SeccionLugar');
        $secciones = $repository->findAll();
       
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            /*
            // encriptacion de la contraseña
            $password = $passwordEncoder->encodePassword($usuario, $usuario->getPlainPassword());
            $usuario->setPassword($password);
            // asigno rol de usuario por defecto
            $rol='ROLE_USER';
            $usuario->setRol($rol);
            // usuario activo
            $active=true;
            $usuario->setActive($active);
            */
            
            $lugar->setEstado(true);
            // cargo en la base
            $em = $this->getDoctrine()->getManager();
            $em->persist($lugar);
            $em->flush();
            
            return $this->redirectToRoute('ProyectoBundle:Lugar:index.html.twig',array("secciones"=>$secciones) );
        }
 
        return $this->render('ProyectoBundle:Lugar:new.html.twig',array("secciones"=>$secciones,
                                                                        'lugar' => $lugar,
                                                                        'form' => $form->createView()));
        
        /*
        $lugar = new Lugar();
        //$seccionlugar = new SeccionLugar();
        $form = $this->createForm('ProyectoBundle\Form\LugarType', $lugar);
        
        return $this->render('ProyectoBundle:Lugar:new.html.twig', array(
            'lugar' => $lugar,
            'form' => $form->createView()));
       */
         
    }

    public function buscarXHorarioAction(Request $request){
        $repository = $this->getDoctrine()->getRepository('ProyectoBundle:Lugar');
        $secciones = $repository->findLibresXHorario();

        return $secciones;
    }
    
}    