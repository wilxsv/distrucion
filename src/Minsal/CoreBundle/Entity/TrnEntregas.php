<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnEntregas
 */
class TrnEntregas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cantidadDistribuida;

    /**
     * @var \DateTime
     */
    private $fechaDocumento;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnDetalle
     */
    private $trnDetalleid;


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
     * Set cantidadDistribuida
     *
     * @param string $cantidadDistribuida
     * @return TrnEntregas
     */
    public function setCantidadDistribuida($cantidadDistribuida)
    {
        $this->cantidadDistribuida = $cantidadDistribuida;

        return $this;
    }

    /**
     * Get cantidadDistribuida
     *
     * @return string 
     */
    public function getCantidadDistribuida()
    {
        return $this->cantidadDistribuida;
    }

    /**
     * Set fechaDocumento
     *
     * @param \DateTime $fechaDocumento
     * @return TrnEntregas
     */
    public function setFechaDocumento($fechaDocumento)
    {
        $this->fechaDocumento = $fechaDocumento;

        return $this;
    }

    /**
     * Get fechaDocumento
     *
     * @return \DateTime 
     */
    public function getFechaDocumento()
    {
        return $this->fechaDocumento;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return TrnEntregas
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
     * @return TrnEntregas
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
     * Set trnDetalleid
     *
     * @param \Minsal\CoreBundle\Entity\TrnDetalle $trnDetalleid
     * @return TrnEntregas
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
}
