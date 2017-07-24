<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatProducto
 */
class CatProducto
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
     * @var string
     */
    private $unidadMedida;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idValeProvisional;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idValeProvisional = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return CatProducto
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
     * @return CatProducto
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
     * @return CatProducto
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
     * @return CatProducto
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
     * @return CatProducto
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
     * @return CatProducto
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
     * @return CatProducto
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
     * Set unidadMedida
     *
     * @param string $unidadMedida
     * @return CatProducto
     */
    public function setUnidadMedida($unidadMedida)
    {
        $this->unidadMedida = $unidadMedida;

        return $this;
    }

    /**
     * Get unidadMedida
     *
     * @return string 
     */
    public function getUnidadMedida()
    {
        return $this->unidadMedida;
    }

    /**
     * Add idValeProvisional
     *
     * @param \Minsal\CoreBundle\Entity\ValeProvisional $idValeProvisional
     * @return CatProducto
     */
    public function addIdValeProvisional(\Minsal\CoreBundle\Entity\ValeProvisional $idValeProvisional)
    {
        $this->idValeProvisional[] = $idValeProvisional;

        return $this;
    }

    /**
     * Remove idValeProvisional
     *
     * @param \Minsal\CoreBundle\Entity\ValeProvisional $idValeProvisional
     */
    public function removeIdValeProvisional(\Minsal\CoreBundle\Entity\ValeProvisional $idValeProvisional)
    {
        $this->idValeProvisional->removeElement($idValeProvisional);
    }

    /**
     * Get idValeProvisional
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdValeProvisional()
    {
        return $this->idValeProvisional;
    }
}
