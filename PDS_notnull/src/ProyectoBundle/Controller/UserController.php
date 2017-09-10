<?php

namespace ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        return new Response ('Bienvenido al modulo');
    }
    
    public function addAction() {
        return new Response ('Agregar usuario');
        
    }
    public function editAction($id){
        return new Response ('editar usario '. $id );
        
    }
}
