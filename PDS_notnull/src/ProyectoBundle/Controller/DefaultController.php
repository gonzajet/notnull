<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        
        // var_dump($establecimientos[0]);
        // die();
//        return $this->render('ProyectoBundle:Establecimiento:googleMaps.html.twig'
//            ,array('establecimientos' => $establecimientos));
        return $this->render('ProyectoBundle:Default:index.html.twig');
    }

}
