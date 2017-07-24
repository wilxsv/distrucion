<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DistribucionProducto
 */
class DistribucionProducto
{
    /**
     * @var \Minsal\CoreBundle\Entity\TrnAsignacion
     */
    private $trnAsignacionid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatProducto
     */
    private $catProductoid;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnDetalle
     */
    private $trnDetalleid;


    /**
     * Set trnAsignacionid
     *
     * @param \Minsal\CoreBundle\Entity\TrnAsignacion $trnAsignacionid
     * @return DistribucionProducto
     */
    public function setTrnAsignacionid(\Minsal\CoreBundle\Entity\TrnAsignacion $trnAsignacionid = null)
    {
        $this->trnAsignacionid = $trnAsignacionid;

        return $this;
    }

    /**
     * Get trnAsignacionid
     *
     * @return \Minsal\CoreBundle\Entity\TrnAsignacion 
     */
    public function getTrnAsignacionid()
    {
        return $this->trnAsignacionid;
    }

    /**
     * Set catProductoid
     *
     * @param \Minsal\CoreBundle\Entity\CatProducto $catProductoid
     * @return DistribucionProducto
     */
    public function setCatProductoid(\Minsal\CoreBundle\Entity\CatProducto $catProductoid = null)
    {
        $this->catProductoid = $catProductoid;

        return $this;
    }

    /**
     * Get catProductoid
     *
     * @return \Minsal\CoreBundle\Entity\CatProducto 
     */
    public function getCatProductoid()
    {
        return $this->catProductoid;
    }

    /**
     * Set trnDetalleid
     *
     * @param \Minsal\CoreBundle\Entity\TrnDetalle $trnDetalleid
     * @return DistribucionProducto
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
