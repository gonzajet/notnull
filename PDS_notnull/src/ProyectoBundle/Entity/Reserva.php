<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Table(name="reserva", indexes={@ORM\Index(name="fk_id_auto", columns={"id_auto"}), @ORM\Index(name="id_lugar", columns={"id_lugar"})})
 * @ORM\Entity
 */
class Reserva
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_desde", type="datetime", nullable=false)
     */
    private $fechaDesde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hasta", type="datetime", nullable=true)
     */
    private $fechaHasta;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \ProyectoBundle\Entity\Auto
     *
     * @ORM\ManyToOne(targetEntity="ProyectoBundle\Entity\Auto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_auto", referencedColumnName="id")
     * })
     */
    private $idAuto;

    /**
     * @var \ProyectoBundle\Entity\Lugar
     *
     * @ORM\ManyToOne(targetEntity="ProyectoBundle\Entity\Lugar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lugar", referencedColumnName="id")
     * })
     */
    private $idLugar;


}

