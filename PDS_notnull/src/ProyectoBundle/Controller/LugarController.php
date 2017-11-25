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
            $cantLugares = $form['Cant']->getData();
            
            for ($i = 1; $i <= $cantLugares; $i++) {
                
                $lugar = new Lugar();
                
                $em = $this->getDoctrine()->getManager();
                $lugar->setEstado(false);
                $lugar->setCodigo("cod" .  uniqid());


                $estableci = $em->getRepository('ProyectoBundle:Establecimiento')->find($establecimiento);
                $estableci->addLugares($lugar);

                 // cargo en la base
                $em->persist($lugar);
                $em->flush();
            
            }
            
            $lugares = $em->getRepository('ProyectoBundle:Lugar')->findAll();
            return $this->render('ProyectoBundle:Lugar:index.html.twig',array('establecimiento' => $establecimiento,
                                                                              'lugares' => $lugares ));
        }
 
        return $this->render('ProyectoBundle:Lugar:new.html.twig',array('lugar' => $lugar,
                                                                        'establecimiento'=>$establecimiento,
                                                                        'form' => $form->createView()));      
    }
    
    
    public function deleteAction($id,$establecimiento)
    {      
       $em = $this->getDoctrine()->getManager();
       $lugar = $em->getRepository('ProyectoBundle:Lugar')->find($id);
       $establecimiento_aux = $em->getRepository('ProyectoBundle:Establecimiento')->find($establecimiento);
       $establecimiento_aux->removeLugares($lugar);
       $em->remove($lugar);
       $em->flush();
       return $this->redirectToRoute('lugar_index', array('id' => $establecimiento));      
    }
    
    
    public function buscarAction($establecimiento ,$check_value )
    {      
       $check_value = $check_value == 'false' ? false : true;
       $em = $this->getDoctrine()->getManager();
       $aux_establecimiento = $em->getRepository('ProyectoBundle:Establecimiento')->find($establecimiento);
       if ($check_value)
            $lugares = $aux_establecimiento->getLugaresLibres();
       else
            $lugares = $aux_establecimiento->getLugares();
       
        return $this->render('ProyectoBundle:Lugar:index.html.twig', array('establecimiento' => $establecimiento,
                                                           'lugares' => $lugares));

    }
    
    
    
    

    public function buscarXHorarioAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('ProyectoBundle:Lugar');
        $secciones = $repository->findLibresXHorario();

        return $secciones;
    }
   
}    