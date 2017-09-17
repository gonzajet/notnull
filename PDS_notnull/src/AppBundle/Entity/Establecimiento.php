<?php

namespace AppBundle\Entity;

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
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=255, nullable=false)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255, nullable=false)
     */
    private $localidad;

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


}

