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
}