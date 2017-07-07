<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnProductos
 */
class TrnProductos
{
    /**
     * @var integer
     */
    private $apiProductoid;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnDistribucion
     */
    private $trnDistribucionid;


    /**
     * Set apiProductoid
     *
     * @param integer $apiProductoid
     * @return TrnProductos
     */
    public function setApiProductoid($apiProductoid)
    {
        $this->apiProductoid = $apiProductoid;

        return $this;
    }

    /**
     * Get apiProductoid
     *
     * @return integer 
     */
    public function getApiProductoid()
    {
        return $this->apiProductoid;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return TrnProductos
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return TrnProductos
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
     * Set trnDistribucionid
     *
     * @param \Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucionid
     * @return TrnProductos
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
}
