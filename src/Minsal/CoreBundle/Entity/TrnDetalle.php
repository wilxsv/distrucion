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
     * @var boolean
     */
    private $verificar;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnDistribucion
     */
    private $trnDistribucionid;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnEstablecimientosdistribucion
     */
    private $apiEstablecimientoid;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnProductos
     */
    private $apiProductoid;


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
     * Set observacion
     *
     * @param string $observacion
     * @return TrnDetalle
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
     * Set trnDistribucionid
     *
     * @param \Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucionid
     * @return TrnDetalle
     */
    public function setTrnDistribucionid(\Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucionid = null)
    {
        $this->trnDistribucionid = $trnDistribucionid;

        return $this;
    }

    /**
     * Get trnDistribucionid
     *
     * @return \Minsal\CoreBundle\Entity\TrnDistribucion 
     */
    public function getTrnDistribucionid()
    {
        return $this->trnDistribucionid;
    }

    /**
     * Set apiEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\TrnEstablecimientosdistribucion $apiEstablecimientoid
     * @return TrnDetalle
     */
    public function setApiEstablecimientoid(\Minsal\CoreBundle\Entity\TrnEstablecimientosdistribucion $apiEstablecimientoid = null)
    {
        $this->apiEstablecimientoid = $apiEstablecimientoid;

        return $this;
    }

    /**
     * Get apiEstablecimientoid
     *
     * @return \Minsal\CoreBundle\Entity\TrnEstablecimientosdistribucion 
     */
    public function getApiEstablecimientoid()
    {
        return $this->apiEstablecimientoid;
    }

    /**
     * Set apiProductoid
     *
     * @param \Minsal\CoreBundle\Entity\TrnProductos $apiProductoid
     * @return TrnDetalle
     */
    public function setApiProductoid(\Minsal\CoreBundle\Entity\TrnProductos $apiProductoid = null)
    {
        $this->apiProductoid = $apiProductoid;

        return $this;
    }

    /**
     * Get apiProductoid
     *
     * @return \Minsal\CoreBundle\Entity\TrnProductos 
     */
    public function getApiProductoid()
    {
        return $this->apiProductoid;
    }
}
