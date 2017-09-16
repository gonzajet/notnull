<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Establecimiento
 *
 * @ORM\Table(name="establecimiento")
 * @ORM\Entity
 */
class Establecimiento
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefono", type="integer", nullable=false)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="precio_hora", type="integer", nullable=true)
     */
    private $precioHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="precio_estadia", type="integer", nullable=true)
     */
    private $precioEstadia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abierto_desde", type="time", nullable=true)
     */
    private $abiertoDesde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abierto_hasta", type="time", nullable=true)
     */
    private $abiertoHasta;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    
    /**
     * Muchos establecimientos tienen muchos usuarios
     * @ ---ManyToMany(targetEntity="usuario", mappedBy="establecimientos")
     */
    /* LO DEJO COMENTADO PARA NO ROMPER LAS FUNCIONALIDADES
    private $usuarios;

    //AGREGAMOS EL ARRAY DE USUARIOS AL CONSTRUCTOR
    public function __construct() {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getUsuarios()
    {
        return $this->usuarios;
    }

    public function addUsuario(Usuario $usuario)
    {
        $this->usuarios->add($usuario);
    }

	public function removeUsuario(Usuario $usuario)
    {
        $this->usuarios->removeElement($usuario) ;
    }
    
     * 
     */
    

}

