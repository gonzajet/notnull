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
            ,array('establecimiento' => $establecimiento));
    }

    public function reservarAction($id, Request $request){
        $reserva = new Reserva();
        $form = $this->createForm('ProyectoBundle\Form\ReservaType', $reserva);


        $lugar = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Lugar')
            ->find($id);


        //$lugares = $this->getDoctrine()
        //    ->getRepository('ProyectoBundle:Lugar')
        //    ->findAll();
        //$autos = $this->getDoctrine()
        //    ->getRepository('ProyectoBundle:Auto')
        //    ->findAll();

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $fDesde = $form['fechaDesde']->getData();
            $fHasta = $form['fechaHasta']->getData();
            $autos = $this->getUser()->getAutos();
            $auto = $autos[0];
            //$lugarid = $lugar.id;

            $reserva->setFechaDesde($fDesde);
            $reserva->setFechaHasta($fHasta);
            $reserva->setIdLugar($lugar);
            $reserva->setIdAuto($auto);

            $em = $this->getDoctrine()->getManager();
            $em -> persist($reserva);
            $em -> flush();
            // return $this->render('ProyectoBundle:Establecimiento:reserva.html.twig'
           // ,array('lugar'=> $lugar,'form' => $form->createView()));
        }




        return $this->render('ProyectoBundle:Establecimiento:reserva.html.twig'
            ,array('lugar'=> $lugar,'form' => $form->createView())
        );
    }

}