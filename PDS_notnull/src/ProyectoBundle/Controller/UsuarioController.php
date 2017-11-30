<?php

namespace ProyectoBundle\Controller;

use ProyectoBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;



/**
 * Usuario controller.
 *
 * @Route("usuario")
 */
class UsuarioController extends Controller
{
    /**
     * Lists all usuario entities.
     *
     * @Route("/", name="usuario_index")
     * @Method("GET")
     */
    public function cuentaAction()
    {
        
        $establecimientos = $this->getDoctrine()
            ->getRepository('ProyectoBundle:Establecimiento')
            ->findEstablecimientosTodos();
           // var_dump($establecimientos[0]);
           // die();
        
        //$encoders = array(new JsonEncoder());
       //$normalizers = array(new ObjectNormalizer());

        //$serializer = new Serializer($establecimientos, $encoders);
        $array=[];
        foreach ($establecimientos as $x){
            $con=0;
            $latitud=[$x->getLat(),$x->getLng()];
            $cadena=[$x->getNombre(),$x->getDireccion(),$x->getLocalidad(),$x->getProvincia()];
            $conjunto=[$cadena, $latitud];
            
            array_push($array , $conjunto ); 
        }
        $auto=$this->getUser()->getAutos();
//    array_push($nada,$establecimientos[0]->getNombre());
        return $this->render('ProyectoBundle:usuario:index.html.twig'
            ,array('establecimientos' => $array, 'autos'=> $auto));
    
    }

    /**
     * Creates a new usuario entity.
     *
     * @Route("/new", name="usuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $passwordEncoder = $this->get('security.password_encoder');
        $usuario = new Usuario();
        $form = $this->createForm('ProyectoBundle\Form\usuarioType', $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encriptacion de la contraseña
            $password = $passwordEncoder->encodePassword($usuario, $usuario->getPlainPassword());
            $usuario->setPassword($password);
            // asigno rol de usuario por defecto
            $roles = 'ROLE_USER';
            $usuario->setRoles($roles);
            // usuario activo

            $active = true;
            $usuario->setActive($active);
            // cargo en la base
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            return $this->render('ProyectoBundle:Default:index.html.twig');
        }
// renderizo si esta mal cargado.
        return $this->render('ProyectoBundle:usuario:new.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a usuario entity.
     *
     * @Route("/{id}", name="usuario_show")
     * @Method("GET")
     */
    public function showAction(Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuario/show.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a usuario entity.
     *
     * @Route("/{id}", name="usuario_login")
     * @Method({"GET", "POST"})
     */
    public function loginAction(request $request)
    {


        return $this->render('usuario/login.html.twig');
    }

    /**
     * Displays a form to edit an existing usuario entity.
     *
     * @Route("/{id}/edit", name="usuario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Usuario $usuario)
    {
//        $deleteForm = $this->createDeleteForm($usuario);
//        $editForm = $this->createForm('ProyectoBundle\Form\usuarioType', $usuario);
//        $editForm->handleRequest($request);
//
//        if ($editForm->isSubmitted() && $editForm->isValid()) {
//            $this->getDoctrine()->getManager()->flush();
//
//            return $this->redirectToRoute('usuario_edit', array('id' => $usuario->getId()));
//        }
//
//        return $this->render('usuario/edit.html.twig', array(
//            'usuario' => $usuario,
//            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        ));
        return $this->render('ProyectoBundle:usuario:edit.html.twig');
    
    }

    /**
     * Deletes a usuario entity.
     *
     * @Route("/{id}", name="usuario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Usuario $usuario)
    {
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush();
        }

        return $this->redirectToRoute('usuario_index');
    }

    /**
     * Creates a form to delete a usuario entity.
     *
     * @param Usuario $usuario The usuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Usuario $usuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuario_delete', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }


}

