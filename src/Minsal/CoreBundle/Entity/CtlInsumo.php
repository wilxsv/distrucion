<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlInsumo
 */
class CtlInsumo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoNu;

    /**
     * @var integer
     */
    private $grupoid;

    /**
     * @var string
     */
    private $codigoSinab;

    /**
     * @var boolean
     */
    private $listadoOficial;

    /**
     * @var string
     */
    private $nombreLargoInsumo;

    /**
     * @var \DateTime
     */
    private $registroSchema;

    /**
     * @var integer
     */
    private $enableSchema;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $trnDistribucion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trnDistribucion = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigoNu
     *
     * @param string $codigoNu
     * @return CtlInsumo
     */
    public function setCodigoNu($codigoNu)
    {
        $this->codigoNu = $codigoNu;

        return $this;
    }

    /**
     * Get codigoNu
     *
     * @return string 
     */
    public function getCodigoNu()
    {
        return $this->codigoNu;
    }

    /**
     * Set grupoid
     *
     * @param integer $grupoid
     * @return CtlInsumo
     */
    public function setGrupoid($grupoid)
    {
        $this->grupoid = $grupoid;

        return $this;
    }

    /**
     * Get grupoid
     *
     * @return integer 
     */
    public function getGrupoid()
    {
        return $this->grupoid;
    }

    /**
     * Set codigoSinab
     *
     * @param string $codigoSinab
     * @return CtlInsumo
     */
    public function setCodigoSinab($codigoSinab)
    {
        $this->codigoSinab = $codigoSinab;

        return $this;
    }

    /**
     * Get codigoSinab
     *
     * @return string 
     */
    public function getCodigoSinab()
    {
        return $this->codigoSinab;
    }

    /**
     * Set listadoOficial
     *
     * @param boolean $listadoOficial
     * @return CtlInsumo
     */
    public function setListadoOficial($listadoOficial)
    {
        $this->listadoOficial = $listadoOficial;

        return $this;
    }

    /**
     * Get listadoOficial
     *
     * @return boolean 
     */
    public function getListadoOficial()
    {
        return $this->listadoOficial;
    }

    /**
     * Set nombreLargoInsumo
     *
     * @param string $nombreLargoInsumo
     * @return CtlInsumo
     */
    public function setNombreLargoInsumo($nombreLargoInsumo)
    {
        $this->nombreLargoInsumo = $nombreLargoInsumo;

        return $this;
    }

    /**
     * Get nombreLargoInsumo
     *
     * @return string 
     */
    public function getNombreLargoInsumo()
    {
        return $this->nombreLargoInsumo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlInsumo
     */
    public function setRegistroSchema($registroSchema)
    {
        $this->registroSchema = $registroSchema;

        return $this;
    }

    /**
     * Get registroSchema
     *
     * @return \DateTime 
     */
    public function getRegistroSchema()
    {
        return $this->registroSchema;
    }

    /**
     * Set enableSchema
     *
     * @param integer $enableSchema
     * @return CtlInsumo
     */
    public function setEnableSchema($enableSchema)
    {
        $this->enableSchema = $enableSchema;

        return $this;
    }

    /**
     * Get enableSchema
     *
     * @return integer 
     */
    public function getEnableSchema()
    {
        return $this->enableSchema;
    }

    /**
     * Add trnDistribucion
     *
     * @param \Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucion
     * @return CtlInsumo
     */
    public function addTrnDistribucion(\Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucion)
    {
        $this->trnDistribucion[] = $trnDistribucion;

        return $this;
    }

    /**
     * Remove trnDistribucion
     *
     * @param \Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucion
     */
    public function removeTrnDistribucion(\Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucion)
    {
        $this->trnDistribucion->removeElement($trnDistribucion);
    }

    /**
     * Get trnDistribucion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTrnDistribucion()
    {
        return $this->trnDistribucion;
    }
    
    public function __toString()
    {
        return $this->getNombreLargoInsumo();
    }
}
