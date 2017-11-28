<?php

namespace ProyectoBundle\Controller;

use ProyectoBundle\Entity\Reserva;
use ProyectoBundle\Form\ReservaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EstablecimientoController extends Controller{
    
    public function indexAction($localidad){
        
        if ($localidad == 'todas'){
            $establecimientos = $this->getDoctrine()
                    ->getRepository('ProyectoBundle:Establecimiento')
                    ->findEstablecimientosTodos();

            return $this->render('ProyectoBundle:Establecimiento:index.html.twig'
                    ,array('establecimientos' => $establecimientos));
        }else{
            $establecimientos = $this->getDoctrine()
                    ->getRepository('ProyectoBundle:Establecimiento')
                    ->findEstablecimientosBarrio($localidad);
            return $this->render('ProyectoBundle:Establecimiento:index.html.twig'
                    ,array('establecimientos' => $establecimientos));
        }
    
    }
    


    public function mapsAction(){
        $establecimientos = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Establecimiento')
            ->findEstablecimientosTodos();
           // var_dump($establecimientos[0]);
           // die();
        return $this->render('ProyectoBundle:Establecimiento:googleMaps.html.twig'
            ,array('establecimientos' => $establecimientos));
    }

    public function puntualAction($id){
        $establecimiento = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Establecimiento')
            ->find($id);

        return $this->render('ProyectoBundle:Establecimiento:puntual.html.twig'
            ,array('establecimiento' => $establecimiento, 'lugares' => null));
    }

    public function reservarAction($lugar, $desde, $hasta, $auto){
        $reserva = new Reserva();
        /*$form = $this->createForm('ProyectoBundle\Form\ReservaType', $reserva);*/

        $lugar = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Lugar')
            ->find($lugar);

        $auto = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Auto')
            ->find($auto);

        $reserva->setIdLugar($lugar);
        $reserva->setIdAuto($auto);
        $reserva->setFechaDesde(intval($desde));
        $reserva->setFechaHasta(intval($hasta));

        $em = $this->getDoctrine()->getManager();
        $em -> persist($reserva);
        $em -> flush();


        return $this->render('ProyectoBundle:Default:index.html.twig');
    }



}