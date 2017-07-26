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
     * @var integer
     */
    private $existencia;

    /**
     * @var \Minsal\CoreBundle\Entity\CatProducto
     */
    private $catProductoid;


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
     * Set existencia
     *
     * @param integer $existencia
     * @return TrnProductoslote
     */
    public function setExistencia($existencia)
    {
        $this->existencia = $existencia;

        return $this;
    }

    /**
     * Get existencia
     *
     * @return integer 
     */
    public function getExistencia()
    {
        return $this->existencia;
    }

    /**
     * Set catProductoid
     *
     * @param \Minsal\CoreBundle\Entity\CatProducto $catProductoid
     * @return TrnProductoslote
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
}
