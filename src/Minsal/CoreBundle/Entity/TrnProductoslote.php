<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnProductoslote
 */
class TrnProductoslote
{
    /**
     * @var integer
     */
    private $apiLoteid;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnDistribucion
     */
    private $trnDistribucionid;


    /**
     * Get apiLoteid
     *
     * @return integer 
     */
    public function getApiLoteid()
    {
        return $this->apiLoteid;
    }

    /**
     * Set trnDistribucionid
     *
     * @param \Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucionid
     * @return TrnProductoslote
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
     * @var \Minsal\CoreBundle\Entity\TrnProductos
     */
    private $apiProductoid;


    /**
     * Set apiProductoid
     *
     * @param \Minsal\CoreBundle\Entity\TrnProductos $apiProductoid
     * @return TrnProductoslote
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
