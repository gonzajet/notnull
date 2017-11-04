<?php

namespace ProyectoBundle\Controller;

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

    public function reservarAction($id){
        $lugar = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Lugar')
            ->find($id);

        return $this->render('ProyectoBundle:Establecimiento:reserva.html.twig'
            ,array('lugar'=> $lugar));
    }

}