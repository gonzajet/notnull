<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auto
 *
 * @ORM\Table(name="auto", uniqueConstraints={@ORM\UniqueConstraint(name="Patente", columns={"patente"})}, indexes={@ORM\Index(name="Usuario", columns={"id_Usuario"})})
 * @ORM\Entity
 */
class Auto
{
    /**
     * @var string
     *
     * @ORM\Column(name="patente", type="string", length=255, nullable=false)
     */
    private $patente;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=255, nullable=true)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=255, nullable=true)
     */
    private $modelo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \ProyectoBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="ProyectoBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;


}

