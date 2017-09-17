<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auto
 *
 * @ORM\Table(name="auto", uniqueConstraints={@ORM\UniqueConstraint(name="patente", columns={"patente"})}, indexes={@ORM\Index(name="usuario", columns={"id_Usuario"})})
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
     * @ORM\Column(name="id_Usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

