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

    /*
     * @Method({"POST"})
     */
    public function reservarAction(Request $request){
        $lugar = $request->request->get('lugar');
        $desde = $request->request->get('desde');
        $hasta = $request->request->get('hasta');
        $auto = $request->request->get('auto');
        $usuario = $request->request->get('usuario');

        $reserva = new Reserva();
        $lugar = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Lugar')
            ->find($lugar);
        $auto = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Auto')
            ->find($auto);
        $usuario = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Usuario')
            ->find($usuario);

        $reserva->setIdLugar($lugar);
        $reserva->setIdAuto($auto);
        $reserva->setFechaDesde(intval($desde));
        $reserva->setFechaHasta(intval($hasta));
        $reserva->setUsuario($usuario);

        $em = $this->getDoctrine()->getManager();
        $em -> persist($reserva);
        $em -> flush();
        die();
    }

    public function misReservasAction($idUsuario){

        $reservas = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Reserva')
            ->findMisReservas($idUsuario);

        return $this->render('ProyectoBundle:Establecimiento:misreservas.html.twig',
            array( 'reservas' => $reservas));
    }

    /*
     * @Method({"POST"})
     */
    public function borrarReservaAction(Request $request){
        $id = $request->request->get('id');

        $reserva = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Reserva')
            ->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($reserva);
        $em->flush();

        $response = new Response();
        return $response->setStatusCode(Response::HTTP_OK);
    }

}