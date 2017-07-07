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
     * @var integer
     */
    private $fechaModificación;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnDetalle
     */
    private $trnDetalleid;

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
     * Set fechaModificación
     *
     * @param integer $fechaModificación
     * @return TrnValidacion
     */
    public function setFechaModificación($fechaModificación)
    {
        $this->fechaModificación = $fechaModificación;

        return $this;
    }

    /**
     * Get fechaModificación
     *
     * @return integer 
     */
    public function getFechaModificación()
    {
        return $this->fechaModificación;
    }

    /**
     * Set trnDetalleid
     *
     * @param \Minsal\CoreBundle\Entity\TrnDetalle $trnDetalleid
     * @return TrnValidacion
     */
    public function setTrnDetalleid(\Minsal\CoreBundle\Entity\TrnDetalle $trnDetalleid = null)
    {
        $this->trnDetalleid = $trnDetalleid;

        return $this;
    }

    /**
     * Get trnDetalleid
     *
     * @return \Minsal\CoreBundle\Entity\TrnDetalle 
     */
    public function getTrnDetalleid()
    {
        return $this->trnDetalleid;
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
