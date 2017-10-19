<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use ProyectoBundle\Entity\Lugar;
use ProyectoBundle\Entity\SeccionLugar;

class LugarController extends Controller
{
    public function indexAction()
    {     
        $repository = $this->getDoctrine()->getRepository('ProyectoBundle:SeccionLugar');
        $secciones = $repository->findAll();
        return $this->render('ProyectoBundle:Lugar:index.html.twig',array("secciones"=>$secciones) );
    }
    
    public function newAction()
    {   
        $lugar = new Lugar();
        //$seccionlugar = new SeccionLugar();
        $form = $this->createForm('ProyectoBundle\Form\LugarType', $lugar);
        
        return $this->render('ProyectoBundle:Lugar:new.html.twig', array(
            'lugar' => $lugar,
            'form' => $form->createView()));
    }
    
}    