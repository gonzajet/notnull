<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lugar
 *
 * @ORM\Table(name="lugar")
 * @ORM\Entity(repositoryClass="ProyectoBundle\Repository\LugarRepository")
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
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '0';

    
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, nullable=false)
     */
    private $codigo;
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
 
}

