<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnDetalle
 */
class TrnDetalle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cpm;

    /**
     * @var string
     */
    private $cantidadDistribuir;

    /**
     * @var string
     */
    private $cantidadSugerida;

    /**
     * @var string
     */
    private $existenciaAlmacenes;

    /**
     * @var string
     */
    private $existenciaFarmacia;

    /**
     * @var integer
     */
    private $apiEstablecimientoid;

    /**
     * @var boolean
     */
    private $verificar;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnValidacion
     */
    private $idTrnValidacion;

    /**
     * @var \Minsal\CoreBundle\Entity\DistribucionProducto
     */
    private $trnAsignacionid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idTrnEntregas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTrnEntregas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set cpm
     *
     * @param string $cpm
     * @return TrnDetalle
     */
    public function setCpm($cpm)
    {
        $this->cpm = $cpm;

        return $this;
    }

    /**
     * Get cpm
     *
     * @return string 
     */
    public function getCpm()
    {
        return $this->cpm;
    }

    /**
     * Set cantidadDistribuir
     *
     * @param string $cantidadDistribuir
     * @return TrnDetalle
     */
    public function setCantidadDistribuir($cantidadDistribuir)
    {
        $this->cantidadDistribuir = $cantidadDistribuir;

        return $this;
    }

    /**
     * Get cantidadDistribuir
     *
     * @return string 
     */
    public function getCantidadDistribuir()
    {
        return $this->cantidadDistribuir;
    }

    /**
     * Set cantidadSugerida
     *
     * @param string $cantidadSugerida
     * @return TrnDetalle
     */
    public function setCantidadSugerida($cantidadSugerida)
    {
        $this->cantidadSugerida = $cantidadSugerida;

        return $this;
    }

    /**
     * Get cantidadSugerida
     *
     * @return string 
     */
    public function getCantidadSugerida()
    {
        return $this->cantidadSugerida;
    }

    /**
     * Set existenciaAlmacenes
     *
     * @param string $existenciaAlmacenes
     * @return TrnDetalle
     */
    public function setExistenciaAlmacenes($existenciaAlmacenes)
    {
        $this->existenciaAlmacenes = $existenciaAlmacenes;

        return $this;
    }

    /**
     * Get existenciaAlmacenes
     *
     * @return string 
     */
    public function getExistenciaAlmacenes()
    {
        return $this->existenciaAlmacenes;
    }

    /**
     * Set existenciaFarmacia
     *
     * @param string $existenciaFarmacia
     * @return TrnDetalle
     */
    public function setExistenciaFarmacia($existenciaFarmacia)
    {
        $this->existenciaFarmacia = $existenciaFarmacia;

        return $this;
    }

    /**
     * Get existenciaFarmacia
     *
     * @return string 
     */
    public function getExistenciaFarmacia()
    {
        return $this->existenciaFarmacia;
    }

    /**
     * Set apiEstablecimientoid
     *
     * @param integer $apiEstablecimientoid
     * @return TrnDetalle
     */
    public function setApiEstablecimientoid($apiEstablecimientoid)
    {
        $this->apiEstablecimientoid = $apiEstablecimientoid;

        return $this;
    }

    /**
     * Get apiEstablecimientoid
     *
     * @return integer 
     */
    public function getApiEstablecimientoid()
    {
        return $this->apiEstablecimientoid;
    }

    /**
     * Set verificar
     *
     * @param boolean $verificar
     * @return TrnDetalle
     */
    public function setVerificar($verificar)
    {
        $this->verificar = $verificar;

        return $this;
    }

    /**
     * Get verificar
     *
     * @return boolean 
     */
    public function getVerificar()
    {
        return $this->verificar;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return TrnDetalle
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
     * @return TrnDetalle
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
     * Set idTrnValidacion
     *
     * @param \Minsal\CoreBundle\Entity\TrnValidacion $idTrnValidacion
     * @return TrnDetalle
     */
    public function setIdTrnValidacion(\Minsal\CoreBundle\Entity\TrnValidacion $idTrnValidacion = null)
    {
        $this->idTrnValidacion = $idTrnValidacion;

        return $this;
    }

    /**
     * Get idTrnValidacion
     *
     * @return \Minsal\CoreBundle\Entity\TrnValidacion 
     */
    public function getIdTrnValidacion()
    {
        return $this->idTrnValidacion;
    }

    /**
     * Set trnAsignacionid
     *
     * @param \Minsal\CoreBundle\Entity\DistribucionProducto $trnAsignacionid
     * @return TrnDetalle
     */
    public function setTrnAsignacionid(\Minsal\CoreBundle\Entity\DistribucionProducto $trnAsignacionid = null)
    {
        $this->trnAsignacionid = $trnAsignacionid;

        return $this;
    }

    /**
     * Get trnAsignacionid
     *
     * @return \Minsal\CoreBundle\Entity\DistribucionProducto 
     */
    public function getTrnAsignacionid()
    {
        return $this->trnAsignacionid;
    }

    /**
     * Add idTrnEntregas
     *
     * @param \Minsal\CoreBundle\Entity\TrnEntregas $idTrnEntregas
     * @return TrnDetalle
     */
    public function addIdTrnEntrega(\Minsal\CoreBundle\Entity\TrnEntregas $idTrnEntregas)
    {
        $this->idTrnEntregas[] = $idTrnEntregas;

        return $this;
    }

    /**
     * Remove idTrnEntregas
     *
     * @param \Minsal\CoreBundle\Entity\TrnEntregas $idTrnEntregas
     */
    public function removeIdTrnEntrega(\Minsal\CoreBundle\Entity\TrnEntregas $idTrnEntregas)
    {
        $this->idTrnEntregas->removeElement($idTrnEntregas);
    }

    /**
     * Get idTrnEntregas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdTrnEntregas()
    {
        return $this->idTrnEntregas;
    }
}
