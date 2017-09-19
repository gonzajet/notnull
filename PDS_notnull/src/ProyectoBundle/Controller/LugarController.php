<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LugarController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProyectoBundle:Lugar:index.html.twig');
    }
    
    public function newAction()
    {
        return $this->render('ProyectoBundle:Lugar:new.html.twig');
    }
    
}
