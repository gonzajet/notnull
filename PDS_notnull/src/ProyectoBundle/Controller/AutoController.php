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

        if ($form->isSubmitted() && $form->isValid()) {
            // cargo en la base
            $user = $this->getUser();
            $auto->setIdUsuario($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($auto);
            $em->flush();
            return $this->render('ProyectoBundle:Usuario:index.html.twig');
        }
// renderizo si esta mal cargado.
        return $this->render('ProyectoBundle:auto:new.html.twig', array(
                    'auto' => $auto,
                    'form' => $form->createView(),
        ));
    }

}
