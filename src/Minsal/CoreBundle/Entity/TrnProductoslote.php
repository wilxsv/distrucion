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
     * @var \Minsal\CoreBundle\Entity\DistribucionProducto
     */
    private $catIsnumoid;


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
     * Set catIsnumoid
     *
     * @param \Minsal\CoreBundle\Entity\DistribucionProducto $catIsnumoid
     * @return TrnProductoslote
     */
    public function setCatIsnumoid(\Minsal\CoreBundle\Entity\DistribucionProducto $catIsnumoid = null)
    {
        $this->catIsnumoid = $catIsnumoid;

        return $this;
    }

    /**
     * Get catIsnumoid
     *
     * @return \Minsal\CoreBundle\Entity\DistribucionProducto 
     */
    public function getCatIsnumoid()
    {
        return $this->catIsnumoid;
    }
}
