<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValeProvisional
 */
class ValeProvisional
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \Minsal\CoreBundle\Entity\SegUsuario
     */
    private $segUsuarioid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $catProductoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->catProductoid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return ValeProvisional
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
     * Set segUsuarioid
     *
     * @param \Minsal\CoreBundle\Entity\SegUsuario $segUsuarioid
     * @return ValeProvisional
     */
    public function setSegUsuarioid(\Minsal\CoreBundle\Entity\SegUsuario $segUsuarioid = null)
    {
        $this->segUsuarioid = $segUsuarioid;

        return $this;
    }

    /**
     * Get segUsuarioid
     *
     * @return \Minsal\CoreBundle\Entity\SegUsuario 
     */
    public function getSegUsuarioid()
    {
        return $this->segUsuarioid;
    }

    /**
     * Add catProductoid
     *
     * @param \Minsal\CoreBundle\Entity\CatProducto $catProductoid
     * @return ValeProvisional
     */
    public function addCatProductoid(\Minsal\CoreBundle\Entity\CatProducto $catProductoid)
    {
        $this->catProductoid[] = $catProductoid;

        return $this;
    }

    /**
     * Remove catProductoid
     *
     * @param \Minsal\CoreBundle\Entity\CatProducto $catProductoid
     */
    public function removeCatProductoid(\Minsal\CoreBundle\Entity\CatProducto $catProductoid)
    {
        $this->catProductoid->removeElement($catProductoid);
    }

    /**
     * Get catProductoid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCatProductoid()
    {
        return $this->catProductoid;
    }
}
