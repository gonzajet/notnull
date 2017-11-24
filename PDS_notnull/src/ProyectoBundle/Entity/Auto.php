<?php

namespace ProyectoBundle\Entity;

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



    /**
     * Set patente
     *
     * @param string $patente
     *
     * @return Auto
     */
    public function setPatente($patente)
    {
        $this->patente = $patente;

        return $this;
    }

    /**
     * Get patente
     *
     * @return string
     */
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return Auto
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Auto
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
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
     * Set idUsuario
     *
     * @param \ProyectoBundle\Entity\Usuario $idUsuario
     *
     * @return Auto
     */
    public function setIdUsuario(\ProyectoBundle\Entity\Usuario $idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \ProyectoBundle\Entity\Usuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
