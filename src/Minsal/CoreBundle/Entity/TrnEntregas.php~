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
     * @var \Minsal\CoreBundle\Entity\TrnProductos
     */
    private $trnProductosdistribucionapiProductoid;


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
     * Set trnProductosdistribucionapiProductoid
     *
     * @param \Minsal\CoreBundle\Entity\TrnProductos $trnProductosdistribucionapiProductoid
     * @return TrnEntregas
     */
    public function setTrnProductosdistribucionapiProductoid(\Minsal\CoreBundle\Entity\TrnProductos $trnProductosdistribucionapiProductoid = null)
    {
        $this->trnProductosdistribucionapiProductoid = $trnProductosdistribucionapiProductoid;

        return $this;
    }

    /**
     * Get trnProductosdistribucionapiProductoid
     *
     * @return \Minsal\CoreBundle\Entity\TrnProductos 
     */
    public function getTrnProductosdistribucionapiProductoid()
    {
        return $this->trnProductosdistribucionapiProductoid;
    }
}
