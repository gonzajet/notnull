<?php

namespace AppBundle\Entity;

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
     * @var integer
     *
     * @ORM\Column(name="id_auto", type="integer", nullable=false)
     */
    private $idAuto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lugar", type="integer", nullable=false)
     */
    private $idLugar;

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


}

