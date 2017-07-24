<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnValidacion
 */
class TrnValidacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $estadoVerificado;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var integer
     */
    private $cantidadPrelimimar;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var \Minsal\CoreBundle\Entity\SegUsuario
     */
    private $segUsuarioid;


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
     * Set estadoVerificado
     *
     * @param boolean $estadoVerificado
     * @return TrnValidacion
     */
    public function setEstadoVerificado($estadoVerificado)
    {
        $this->estadoVerificado = $estadoVerificado;

        return $this;
    }

    /**
     * Get estadoVerificado
     *
     * @return boolean 
     */
    public function getEstadoVerificado()
    {
        return $this->estadoVerificado;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return TrnValidacion
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
     * Set cantidadPrelimimar
     *
     * @param integer $cantidadPrelimimar
     * @return TrnValidacion
     */
    public function setCantidadPrelimimar($cantidadPrelimimar)
    {
        $this->cantidadPrelimimar = $cantidadPrelimimar;

        return $this;
    }

    /**
     * Get cantidadPrelimimar
     *
     * @return integer 
     */
    public function getCantidadPrelimimar()
    {
        return $this->cantidadPrelimimar;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return TrnValidacion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set segUsuarioid
     *
     * @param \Minsal\CoreBundle\Entity\SegUsuario $segUsuarioid
     * @return TrnValidacion
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
}
