<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SegUsuario
 */
class SegUsuario
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
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $tokenSinab;

    /**
     * @var integer
     */
    private $establecimientoid;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idSegRol;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSegRol = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SegUsuario
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
     * Set password
     *
     * @param string $password
     * @return SegUsuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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

    /**
     * Set tokenSinab
     *
     * @param string $tokenSinab
     * @return SegUsuario
     */
    public function setTokenSinab($tokenSinab)
    {
        $this->tokenSinab = $tokenSinab;

        return $this;
    }

    /**
     * Get tokenSinab
     *
     * @return string
     */
    public function getTokenSinab()
    {
        return $this->tokenSinab;
    }

    /**
     * Set establecimientoid
     *
     * @param integer $establecimientoid
     * @return SegUsuario
     */
    public function setEstablecimientoid($establecimientoid)
    {
        $this->establecimientoid = $establecimientoid;

        return $this;
    }

    /**
     * Get establecimientoid
     *
     * @return integer
     */
    public function getEstablecimientoid()
    {
        return $this->establecimientoid;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return SegUsuario
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
     * @return SegUsuario
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
     * Set salt
     *
     * @param string $salt
     * @return SegUsuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Add idSegRol
     *
     * @param \Minsal\CoreBundle\Entity\SegRol $idSegRol
     * @return SegUsuario
     */
    public function addIdSegRol(\Minsal\CoreBundle\Entity\SegRol $idSegRol)
    {
        $this->idSegRol[] = $idSegRol;

        return $this;
    }

    /**
     * Remove idSegRol
     *
     * @param \Minsal\CoreBundle\Entity\SegRol $idSegRol
     */
    public function removeIdSegRol(\Minsal\CoreBundle\Entity\SegRol $idSegRol)
    {
        $this->idSegRol->removeElement($idSegRol);
    }

    /**
     * Get idSegRol
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdSegRol()
    {
        return $this->idSegRol;
    }

    public function __toString(){
      return $this->nombre;
    }
}
