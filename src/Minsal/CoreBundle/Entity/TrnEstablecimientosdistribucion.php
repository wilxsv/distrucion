<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnEstablecimientosdistribucion
 */
class TrnEstablecimientosdistribucion
{
    /**
     * @var integer
     */
    private $apiEstablecimientoid;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnDistribucion
     */
    private $trnDistribucionid;


    /**
     * Set apiEstablecimientoid
     *
     * @param integer $apiEstablecimientoid
     * @return TrnEstablecimientosdistribucion
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
     * Set trnDistribucionid
     *
     * @param \Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucionid
     * @return TrnEstablecimientosdistribucion
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
