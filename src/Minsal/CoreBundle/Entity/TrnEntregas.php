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
     * @var integer
     */
    private $trnDetalleid;

    /**
     * @var \DateTime
     */
    private $fechaDocumeento;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var \Minsal\CoreBundle\Entity\ValeProvisional
     */
    private $idValeProvisional;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idTrnDetalle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTrnDetalle = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set trnDetalleid
     *
     * @param integer $trnDetalleid
     * @return TrnEntregas
     */
    public function setTrnDetalleid($trnDetalleid)
    {
        $this->trnDetalleid = $trnDetalleid;

        return $this;
    }

    /**
     * Get trnDetalleid
     *
     * @return integer
     */
    public function getTrnDetalleid()
    {
        return $this->trnDetalleid;
    }

    /**
     * Set fechaDocumeento
     *
     * @param \DateTime $fechaDocumeento
     * @return TrnEntregas
     */
    public function setFechaDocumeento($fechaDocumeento)
    {
        $this->fechaDocumeento = $fechaDocumeento;

        return $this;
    }

    /**
     * Get fechaDocumeento
     *
     * @return \DateTime
     */
    public function getFechaDocumeento()
    {
        return $this->fechaDocumeento;
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
     * Set idValeProvisional
     *
     * @param \Minsal\CoreBundle\Entity\ValeProvisional $idValeProvisional
     * @return TrnEntregas
     */
    public function setIdValeProvisional(\Minsal\CoreBundle\Entity\ValeProvisional $idValeProvisional = null)
    {
        $this->idValeProvisional = $idValeProvisional;

        return $this;
    }

    /**
     * Get idValeProvisional
     *
     * @return \Minsal\CoreBundle\Entity\ValeProvisional
     */
    public function getIdValeProvisional()
    {
        return $this->idValeProvisional;
    }

    /**
     * Add idTrnDetalle
     *
     * @param \Minsal\CoreBundle\Entity\TrnDetalle $idTrnDetalle
     * @return TrnEntregas
     */
    public function addIdTrnDetalle(\Minsal\CoreBundle\Entity\TrnDetalle $idTrnDetalle)
    {
        $this->idTrnDetalle[] = $idTrnDetalle;

        return $this;
    }

    /**
     * Remove idTrnDetalle
     *
     * @param \Minsal\CoreBundle\Entity\TrnDetalle $idTrnDetalle
     */
    public function removeIdTrnDetalle(\Minsal\CoreBundle\Entity\TrnDetalle $idTrnDetalle)
    {
        $this->idTrnDetalle->removeElement($idTrnDetalle);
    }

    /**
     * Get idTrnDetalle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdTrnDetalle()
    {
        return $this->idTrnDetalle;
    }
}
