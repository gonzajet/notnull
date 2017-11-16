<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use ProyectoBundle\Entity\Lugar;
use ProyectoBundle\Entity\SeccionLugar;
use ProyectoBundle\Entity\Establecimiento;
use Symfony\Component\HttpFoundation\Request;

class LugarController extends Controller
{
    public function indexAction($id)
    {     
       
        $em = $this->getDoctrine();
        $query = $em->getRepository('ProyectoBundle:Lugar');
        $establecimiento = $em->getRepository('ProyectoBundle:Establecimiento')->find($id);
        $lugares = $establecimiento->getLugares();
         return $this->render('ProyectoBundle:Lugar:index.html.twig'
                 ,array('establecimiento' => $id,
                       'lugares' => $lugares));
    }
    
    public function newAction(Request $request, $establecimiento)
    {   
        $lugar = new Lugar();
        $form = $this->createForm('ProyectoBundle\Form\LugarType', $lugar);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $codigo = $form['codigo']->getData();
            
            $em = $this->getDoctrine()->getManager();
            $lugar->setEstado(false);
            $lugar->setCodigo($codigo);
            
           
            $estableci = $em->getRepository('ProyectoBundle:Establecimiento')->find($establecimiento);
            //$category = $em->getRepository('AkoStoreBundle:Category')->find($category_id);
            $estableci->addLugares($lugar);
            
             // cargo en la base
            $em->persist($lugar);
            $em->flush();
            $lugares = $em->getRepository('ProyectoBundle:Lugar')->findAll();
            return $this->render('ProyectoBundle:Lugar:index.html.twig',array('establecimiento' => $establecimiento,
                                                                              'lugares' => $lugares ));
        }
 
        return $this->render('ProyectoBundle:Lugar:new.html.twig',array('lugar' => $lugar,
                                                                        'establecimiento'=>$establecimiento,
                                                                        'form' => $form->createView()));      
    }

    public function buscarXHorarioAction(Request $request){
        $repository = $this->getDoctrine()->getRepository('ProyectoBundle:Lugar');
        $secciones = $repository->findLibresXHorario();

        return $secciones;
    }
    
    
    
    
}    