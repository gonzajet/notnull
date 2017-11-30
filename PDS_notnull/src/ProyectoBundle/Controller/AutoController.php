<?php

namespace ProyectoBundle\Controller;

use ProyectoBundle\Entity\Usuario;
use ProyectoBundle\Entity\Auto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AutoController extends Controller {

    /**
     * Creates a new auto entity.
     *
     * @Route("auto/new", name="auto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $auto = new Auto();
        $form = $this->createForm('ProyectoBundle\Form\autoType', $auto);
        $form->handleRequest($request);
        $establecimientos = $this->getDoctrine()
                ->getRepository('ProyectoBundle:Establecimiento')
                ->findEstablecimientosTodos();
        $array = [];
        foreach ($establecimientos as $x) {
            $con = 0;
            $latitud = [$x->getLat(), $x->getLng()];
            $cadena = [$x->getNombre(), $x->getDireccion(), $x->getLocalidad(), $x->getProvincia()];
            $conjunto = [$cadena, $latitud];

            array_push($array, $conjunto);
        }
        
//    array_push($nada,$establecimientos[0]->getNombre());

        if ($form->isSubmitted() && $form->isValid()) {
            // cargo en la base
            $user = $this->getUser();
            $auto->setIdUsuario($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($auto);
            $em->flush();
            $autos = $this->getUser()->getAutos();
            return $this->render('ProyectoBundle:usuario:index.html.twig'
                            , array('establecimientos' => $array, 'autos' => $autos));
        }
// renderizo si esta mal cargado.
        return $this->render('ProyectoBundle:Auto:new.html.twig', array(
                    'auto' => $auto,
                    'form' => $form->createView(),
        ));
    }

}
