<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lugar
 *
 * @ORM\Table(name="lugar", indexes={@ORM\Index(name="id_establecimiento", columns={"id_establecimiento"}), @ORM\Index(name="id_seccion", columns={"id_seccion"})})
 * @ORM\Entity
 */
class Lugar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_establecimiento", type="integer", nullable=false)
     */
    private $idEstablecimiento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, nullable=false)
     */
    private $codigo;

    /**
     * @var \SeccionLugar
     *
     * @ORM\ManyToOne(targetEntity="SeccionLugar")
    */
    private $idSeccion;
    
    
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
     * Get idEstablecimiento
     *
     * @return integer
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }
    
    /**
     * Set idEstablecimiento
     *
     * @param string $idEstablecimiento
     *
     * @return idEstablecimiento
     */
    public function setIdEstablecimiento($idEstablecimiento)
    {
        $this->idEstablecimiento = $idEstablecimiento;
    
        return $this;
    }
    
     /**
     * Get estado
     
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }
    
    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }
    
     /**
     * Get codigo
     
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    
    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }
    
    
    /**
     * Get idSeccion
     
     * @return integer
     */
    public function getIdSeccion()
    {
        return $this->idSeccion;
    }
    
    /**
     * Set idSeccion
     *
     * @param string $idSeccion
     *
     * @return idSeccion
     */
    public function setIdSeccion($idSeccion)
    {
        $this->idSeccion = $idSeccion;
    
        return $this;
    }
    

}
