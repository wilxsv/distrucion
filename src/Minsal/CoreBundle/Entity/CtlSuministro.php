<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlSuministro
 */
class CtlSuministro
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreSuministro;

    /**
     * @var string
     */
    private $detalleSuministro;

    /**
     * @var \DateTime
     */
    private $registroSchema;

    /**
     * @var string
     */
    private $detalleSchema;

    /**
     * @var integer
     */
    private $userIdSchema;

    /**
     * @var string
     */
    private $ipUserSchema;

    /**
     * @var integer
     */
    private $estadoSchema;

    /**
     * @var integer
     */
    private $enableSchema;

    /**
     * @var integer
     */
    private $codificacionSuministro;

    /**
     * @var integer
     */
    private $rolSolicitaSuministro;

    /**
     * @var integer
     */
    private $rolValidaSuministro;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlSuministro
     */
    private $ctlSuministroid;


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
     * Set nombreSuministro
     *
     * @param string $nombreSuministro
     * @return CtlSuministro
     */
    public function setNombreSuministro($nombreSuministro)
    {
        $this->nombreSuministro = $nombreSuministro;

        return $this;
    }

    /**
     * Get nombreSuministro
     *
     * @return string 
     */
    public function getNombreSuministro()
    {
        return $this->nombreSuministro;
    }

    /**
     * Set detalleSuministro
     *
     * @param string $detalleSuministro
     * @return CtlSuministro
     */
    public function setDetalleSuministro($detalleSuministro)
    {
        $this->detalleSuministro = $detalleSuministro;

        return $this;
    }

    /**
     * Get detalleSuministro
     *
     * @return string 
     */
    public function getDetalleSuministro()
    {
        return $this->detalleSuministro;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlSuministro
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
     * Set detalleSchema
     *
     * @param string $detalleSchema
     * @return CtlSuministro
     */
    public function setDetalleSchema($detalleSchema)
    {
        $this->detalleSchema = $detalleSchema;

        return $this;
    }

    /**
     * Get detalleSchema
     *
     * @return string 
     */
    public function getDetalleSchema()
    {
        return $this->detalleSchema;
    }

    /**
     * Set userIdSchema
     *
     * @param integer $userIdSchema
     * @return CtlSuministro
     */
    public function setUserIdSchema($userIdSchema)
    {
        $this->userIdSchema = $userIdSchema;

        return $this;
    }

    /**
     * Get userIdSchema
     *
     * @return integer 
     */
    public function getUserIdSchema()
    {
        return $this->userIdSchema;
    }

    /**
     * Set ipUserSchema
     *
     * @param string $ipUserSchema
     * @return CtlSuministro
     */
    public function setIpUserSchema($ipUserSchema)
    {
        $this->ipUserSchema = $ipUserSchema;

        return $this;
    }

    /**
     * Get ipUserSchema
     *
     * @return string 
     */
    public function getIpUserSchema()
    {
        return $this->ipUserSchema;
    }

    /**
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     * @return CtlSuministro
     */
    public function setEstadoSchema($estadoSchema)
    {
        $this->estadoSchema = $estadoSchema;

        return $this;
    }

    /**
     * Get estadoSchema
     *
     * @return integer 
     */
    public function getEstadoSchema()
    {
        return $this->estadoSchema;
    }

    /**
     * Set enableSchema
     *
     * @param integer $enableSchema
     * @return CtlSuministro
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
     * Set codificacionSuministro
     *
     * @param integer $codificacionSuministro
     * @return CtlSuministro
     */
    public function setCodificacionSuministro($codificacionSuministro)
    {
        $this->codificacionSuministro = $codificacionSuministro;

        return $this;
    }

    /**
     * Get codificacionSuministro
     *
     * @return integer 
     */
    public function getCodificacionSuministro()
    {
        return $this->codificacionSuministro;
    }

    /**
     * Set rolSolicitaSuministro
     *
     * @param integer $rolSolicitaSuministro
     * @return CtlSuministro
     */
    public function setRolSolicitaSuministro($rolSolicitaSuministro)
    {
        $this->rolSolicitaSuministro = $rolSolicitaSuministro;

        return $this;
    }

    /**
     * Get rolSolicitaSuministro
     *
     * @return integer 
     */
    public function getRolSolicitaSuministro()
    {
        return $this->rolSolicitaSuministro;
    }

    /**
     * Set rolValidaSuministro
     *
     * @param integer $rolValidaSuministro
     * @return CtlSuministro
     */
    public function setRolValidaSuministro($rolValidaSuministro)
    {
        $this->rolValidaSuministro = $rolValidaSuministro;

        return $this;
    }

    /**
     * Get rolValidaSuministro
     *
     * @return integer 
     */
    public function getRolValidaSuministro()
    {
        return $this->rolValidaSuministro;
    }

    /**
     * Set ctlSuministroid
     *
     * @param \Minsal\CoreBundle\Entity\CtlSuministro $ctlSuministroid
     * @return CtlSuministro
     */
    public function setCtlSuministroid(\Minsal\CoreBundle\Entity\CtlSuministro $ctlSuministroid = null)
    {
        $this->ctlSuministroid = $ctlSuministroid;

        return $this;
    }

    /**
     * Get ctlSuministroid
     *
     * @return \Minsal\CoreBundle\Entity\CtlSuministro 
     */
    public function getCtlSuministroid()
    {
        return $this->ctlSuministroid;
    }
    
    public function __toString()
    {
        return $this->getNombreSuministro();
    }
}
