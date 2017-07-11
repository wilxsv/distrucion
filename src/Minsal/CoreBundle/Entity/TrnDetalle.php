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
     * @var \Minsal\CoreBundle\Entity\DistribucionProducto
     */
    private $catProductoid;


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
     * Set catProductoid
     *
     * @param \Minsal\CoreBundle\Entity\DistribucionProducto $catProductoid
     * @return TrnDetalle
     */
    public function setCatProductoid(\Minsal\CoreBundle\Entity\DistribucionProducto $catProductoid = null)
    {
        $this->catProductoid = $catProductoid;

        return $this;
    }

    /**
     * Get catProductoid
     *
     * @return \Minsal\CoreBundle\Entity\DistribucionProducto 
     */
    public function getCatProductoid()
    {
        return $this->catProductoid;
    }
}
