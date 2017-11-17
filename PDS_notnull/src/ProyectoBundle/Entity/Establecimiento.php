<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ProyectoBundle\Entity\Lugar;

/**
 * Establecimiento
 * @ORM\Entity(repositoryClass="ProyectoBundle\Repository\EstablecimientoRepository")
 * @ORM\Table(name="establecimiento")
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

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProyectoBundle\Entity\Usuario", mappedBy="idEstablecimiento")
     */
    private $idUsuario;
    
    
    /**
     * Many Establecimientos have Many lugares.
     * @ManyToMany(targetEntity="Lugar")
     * @JoinTable(name="lugar_establecimiento",
     *      joinColumns={@JoinColumn(name="id_establecimiento", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="id_lugar", referencedColumnName="id")}
     *      )
     */
    private $lugares;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="string", length=255, nullable=true)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="string", length=255, nullable=true)
     */
    private $lng;
    

    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->idUsuario = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idUsuario = new ArrayCollection();
        $this->lugares = new ArrayCollection();
    }

    
    public function getLugares(){
        return $this->lugares;
    }

    public function getLugaresLibres(){
        $libres = [];
        
        for ($i = 0; $i <count($this->lugares); $i++) {
            $lugar = $this->lugares[$i];
            $estado = $lugar->getEstado();
            if ($estado == FALSE ) {
                array_push($libres, $this->lugares[$i]);
                
            }
        }
        return $libres;
    }



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Establecimiento
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Establecimiento
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Establecimiento
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Establecimiento
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Establecimiento
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set precioHora
     *
     * @param integer $precioHora
     *
     * @return Establecimiento
     */
    public function setPrecioHora($precioHora)
    {
        $this->precioHora = $precioHora;

        return $this;
    }

    /**
     * Get precioHora
     *
     * @return integer
     */
    public function getPrecioHora()
    {
        return $this->precioHora;
    }

    /**
     * Set precioEstadia
     *
     * @param integer $precioEstadia
     *
     * @return Establecimiento
     */
    public function setPrecioEstadia($precioEstadia)
    {
        $this->precioEstadia = $precioEstadia;

        return $this;
    }

    /**
     * Get precioEstadia
     *
     * @return integer
     */
    public function getPrecioEstadia()
    {
        return $this->precioEstadia;
    }

    /**
     * Set abiertoDesde
     *
     * @param \DateTime $abiertoDesde
     *
     * @return Establecimiento
     */
    public function setAbiertoDesde($abiertoDesde)
    {
        $this->abiertoDesde = $abiertoDesde;

        return $this;
    }

    /**
     * Get abiertoDesde
     *
     * @return \DateTime
     */
    public function getAbiertoDesde()
    {
        return $this->abiertoDesde;
    }

    /**
     * Set abiertoHasta
     *
     * @param \DateTime $abiertoHasta
     *
     * @return Establecimiento
     */
    public function setAbiertoHasta($abiertoHasta)
    {
        $this->abiertoHasta = $abiertoHasta;

        return $this;
    }

    /**
     * Get abiertoHasta
     *
     * @return \DateTime
     */
    public function getAbiertoHasta()
    {
        return $this->abiertoHasta;
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
     * Add idUsuario
     *
     * @param \ProyectoBundle\Entity\Usuario $idUsuario
     *
     * @return Establecimiento
     */
    public function addIdUsuario(\ProyectoBundle\Entity\Usuario $idUsuario)
    {
        $this->idUsuario[] = $idUsuario;

        return $this;
    }

    /**
     * Remove idUsuario
     *
     * @param \ProyectoBundle\Entity\Usuario $idUsuario
     */
    public function removeIdUsuario(\ProyectoBundle\Entity\Usuario $idUsuario)
    {
        $this->idUsuario->removeElement($idUsuario);
    }

    /**
     * Get idUsuario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set lat
     *
     * @param string $lat
     *
     * @return Establecimiento
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Set lng
     *
     * @param string $lng
     *
     * @return Establecimiento
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Add lugare
     *
     * @param \ProyectoBundle\Entity\Lugar $lugare
     *
     * @return Establecimiento
     */
    public function addLugares(\ProyectoBundle\Entity\Lugar $lugare)
    {
        $this->lugares[] = $lugare;

        return $this;
    }

    /**
     * Remove lugares
     *
     * @param \ProyectoBundle\Entity\Lugar $lugare
     */
    public function removeLugares(\ProyectoBundle\Entity\Lugar $lugare)
    {
        $this->lugares->removeElement($lugare);
    }
}
