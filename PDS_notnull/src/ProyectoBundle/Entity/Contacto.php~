<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;

/**
 * Contacto
 *
 * @ORM\Table(name="contacto")
 * @ORM\Entity
 */
class Contacto
{
    /**
     * @var string
     * @Assert\Type("string")
     * @Assert\NotBlank(message="El campo nombre no puede estar vacío")
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     * @Assert\Regex("/^[a-zA-Z]+$/", message= "El campo nombre no puede contener numeros")
    
     */
    private $nombre;

    /**
     * @var string
     * @Assert\Type("string")
     * @Assert\NotBlank(message="El campo apellido no puede estar vacío")
     * @ORM\Column(name="apellido", type="string", length=100, nullable=false)
     * @Assert\Regex("/^[a-zA-Z]+$/", message= "El campo apellido no puede contener numeros")
     */
    private $apellido;

    /**
     * @var string
     * @Assert\NotBlank(message="El campo email no puede estar vacío")
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     * @Assert\Email(
     *     message = "El mail no es valido.")
     */
    private $email;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string
     * @Assert\NotBlank(message="El campo mensaje no puede estar vacío")
     * @ORM\Column(name="mensaje", type="text", length=65535, nullable=false)
     * @Assert\Type("string")
   
     */
    private $mensaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    
    private $id;
    
    /**
    * @var string
    * @Assert\NotBlank(message="El campo subject no puede estar vacío")
    * @ORM\Column(name="subject", type="string", length=255)
    * @Assert\Type("string")
    
    */
 
    private $subject;
    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Contacto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Contacto
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contacto
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Contacto
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Contacto
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set createdAt
     *
     * @param \PrePersist
     *
     * @return Contacto
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = new \DateTime();

        
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
     /**
    * Set subject
    *
    * @param string $subject
    *
    * @return Contact
    */
    public function setSubject($subject)
   {
       $this->subject = $subject;
       return $this;
   }
 
   /**
    * Get subject
    *
    * @return string
    */
 
   public function getSubject()
   {
       return $this->subject;
   }
 
  
    
}
