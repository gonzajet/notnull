<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
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
            return $this->redirectToRoute('lugar_index', array('id' => $establecimiento));
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
    
    
    


    public function buscarXHorarioAction($establecimiento, $fechaDesde, $fechaHasta)
    {
        /*Recuperamos el establecimiento para buscar los lugares que tiene relacionados*/
        $establecimiento_o = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Establecimiento')
            ->find($establecimiento);
        $lugares = $establecimiento_o->getLugares();

        /*Obtengo los id de los lugares*/
        /*$id_lugares = array();
        foreach ($lugares as $lugar) {
            array_push($id_lugares, $lugar->getId());
        }*/

        /*Buscamos las reservas que haya en esa franja horaria para esos lugares*/
        $reservas = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Reserva')
            ->findPorHorario($fechaDesde,$fechaHasta,$lugares);

        /*Recorremos los lugares y nos fijamos si no estan reservados*/
        $lugares_filtrados = array();
        $i=-1;
        $s= true;
        if(sizeof($reservas) == 0){$lugares_filtrados = $lugares;}
        else {
            foreach ($lugares as $lugar) {
                $i++;
                foreach ($reservas as $reserva) {
                    if ($lugar->getId() == $reserva->getIdLugar()->getId()) {
                        $s=false;
                    }
                }
                if ($s){array_push($lugares_filtrados, $lugar);}
                $s=true;
            }
        }

        return $this->render('ProyectoBundle:Establecimiento:test.html.twig'
            ,array('establecimiento' => $establecimiento_o,
                           'lugares' => $lugares_filtrados,
                           'Desde'   => $fechaDesde,
                           'Hasta'   => $fechaHasta));
    }



    /*
     * @Method({"GET"})
     */
    public function buscarLugaresAction(Request $request)
    {
        $establecimiento = $request->request->get('establecimiento');
        $fechaDesde = $request->request->get('fechaDesde');
        $fechaHasta = $request->request->get('fechaHasta');

        /*Recuperamos el establecimiento para buscar los lugares que tiene relacionados*/
        $establecimiento_o = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Establecimiento')
            ->find($establecimiento);
        $lugares = $establecimiento_o->getLugares();

        /*Buscamos las reservas que haya en esa franja horaria para esos lugares*/
        $reservas = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Reserva')
            ->findPorHorario($fechaDesde,$fechaHasta,$lugares);

        /*Recorremos los lugares y nos fijamos si no estan reservados*/
        $lugares_filtrados = array();
        $i=-1;
        $s= true;
        if(sizeof($reservas) == 0){$lugares_filtrados = $lugares;}
        else {
            foreach ($lugares as $lugar) {
                $i++;
                foreach ($reservas as $reserva) {
                    if ($lugar->getId() == $reserva->getIdLugar()->getId()) {
                        $s=false;
                    }
                }
                if ($s){array_push($lugares_filtrados, $lugar);}
                $s=true;
            }
        }

        return new JsonResponse(array('lugares_libres'=>"asd"));
    }

}    