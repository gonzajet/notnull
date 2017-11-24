<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity

 */
class Usuario implements AdvancedUserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=255, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="text", nullable=false)
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="e_mail", type="string", length=255, nullable=false)
     */
    private $e_mail;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Auto", mappedBy="idUsuario")
     */
    private $autos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProyectoBundle\Entity\Establecimiento", inversedBy="idUsuario")
     * @ORM\JoinTable(name="usuario_establecimiento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     *   }
     * )
     */
    private $idEstablecimiento;
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEstablecimiento = new \Doctrine\Common\Collections\ArrayCollection();
    //    $this->autos = new ArrayCollection();
        $this->isActive = true;
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
     * Set usuario
     *
     * @param integer $id
     *
     * @return usuario
     */
    public function setId($id)
    {
        $this->id= $id;
    
        return $this;
    }
    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set rol
     *
     * @param string $roles
     *
     * @return usuario
     */
    public function setRoles(string $roles)
    {
        $this->roles = $roles;
    
        return $this;
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    public function getAutos(){
        return $this->autos;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }
    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return usuario
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
     * @return usuario
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
     * Set e_mail
     *
     * @param string $e_mail
     *
     * @return usuario
     */
    public function setEmail($e_mail)
    {
        $this->e_mail = $e_mail;
    
        return $this;
    }

    /**
     * Get e_mail
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->e_mail;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return usuario
     */
     
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
        /**
     * Set is_active
     *
     * @param bolean $active
     *
     * @return usuario
     */
    public function setActive($active)
    {
        $this->is_active=$active;
        return $this;
    }   
    public function getUsername()
    {
        return $this->e_mail;
    }

    public function eraseCredentials(){
        return null;
    }
        public function getSalt()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
    
    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->is_active;
    }

    // serialize and unserialize must be updated - see below
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->usuario,
            $this->password,
            $this->is_active
        ));
    }
    public function unserialize($serialized) 
    {
    list (
            $this->id,
            $this->usuario,
            $this->password,
            $this->is_active
        ) = unserialize($serialized);
    
    }

    /**
     * Add idEstablecimiento
     *
     * @param \ProyectoBundle\Entity\Establecimiento $idEstablecimiento
     *
     * @return Usuario
     */
    public function addIdEstablecimiento(\ProyectoBundle\Entity\Establecimiento $idEstablecimiento)
    {
        $this->idEstablecimiento[] = $idEstablecimiento;

        return $this;
    }

    /**
     * Remove idEstablecimiento
     *
     * @param \ProyectoBundle\Entity\Establecimiento $idEstablecimiento
     */
    public function removeIdEstablecimiento(\ProyectoBundle\Entity\Establecimiento $idEstablecimiento)
    {
        $this->idEstablecimiento->removeElement($idEstablecimiento);
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

   

  

}
