<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Entity(repositoryClass="ProyectoBundle\Repository\ReservaRepository")
 * @ORM\Table(name="reserva", indexes={@ORM\Index(name="fk_id_auto", columns={"id_auto"}), @ORM\Index(name="id_lugar", columns={"id_lugar"})})
 * @ORM\Entity
 */
class Reserva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fecha_desde", type="integer", nullable=false)
     */
    private $fechaDesde;

    /**
     * @var integer
     *
     * @ORM\Column(name="fecha_hasta", type="integer", nullable=true)
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



    /**
     * Set fechaDesde
     *
     * @param \DateTime $fechaDesde
     *
     * @return Reserva
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;

        return $this;
    }

    /**
     * Get fechaDesde
     *
     * @return \DateTime
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    /**
     * Set fechaHasta
     *
     * @param \DateTime $fechaHasta
     *
     * @return Reserva
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;

        return $this;
    }

    /**
     * Get fechaHasta
     *
     * @return \DateTime
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idLugar
     *
     * @param \ProyectoBundle\Entity\Lugar $idLugar
     *
     * @return Reserva
     */
    public function setIdLugar(\ProyectoBundle\Entity\Lugar $idLugar = null)
    {
        $this->idLugar = $idLugar;

        return $this;
    }

    /**
     * Get idLugar
     *
     * @return \ProyectoBundle\Entity\Lugar
     */
    public function getIdLugar()
    {
        return $this->idLugar;
    }

    /**
     * Set idAuto
     *
     * @param \ProyectoBundle\Entity\Auto $idAuto
     *
     * @return Reserva
     */
    public function setIdAuto(\ProyectoBundle\Entity\Auto $idAuto = null)
    {
        $this->idAuto = $idAuto;

        return $this;
    }

    /**
     * Get idAuto
     *
     * @return \ProyectoBundle\Entity\Auto
     */
    public function getIdAuto()
    {
        return $this->idAuto;
    }
}
