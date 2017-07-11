<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SegRol
 */
class SegRol
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $segUsuarioid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->segUsuarioid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return SegRol
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return SegRol
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return SegRol
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Add segUsuarioid
     *
     * @param \Minsal\CoreBundle\Entity\SegUsuario $segUsuarioid
     * @return SegRol
     */
    public function addSegUsuarioid(\Minsal\CoreBundle\Entity\SegUsuario $segUsuarioid)
    {
        $this->segUsuarioid[] = $segUsuarioid;

        return $this;
    }

    /**
     * Remove segUsuarioid
     *
     * @param \Minsal\CoreBundle\Entity\SegUsuario $segUsuarioid
     */
    public function removeSegUsuarioid(\Minsal\CoreBundle\Entity\SegUsuario $segUsuarioid)
    {
        $this->segUsuarioid->removeElement($segUsuarioid);
    }

    /**
     * Get segUsuarioid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSegUsuarioid()
    {
        return $this->segUsuarioid;
    }
    
    public function __toString() {
        return $this->getNombre();
    }
}
