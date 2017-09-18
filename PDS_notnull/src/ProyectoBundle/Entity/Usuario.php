<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=255, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="text", nullable=false)
     */
    private $rol;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="e_mail", type="string", length=255, nullable=false)
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProyectoBundle\Entity\Establecimiento", inversedBy="idUsuario")
     * @ORM\JoinTable(name="usuario_establecimiento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     *   }
     * )
     */
    private $idEstablecimiento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEstablecimiento = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

