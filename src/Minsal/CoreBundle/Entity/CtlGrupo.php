<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlGrupo
 */
class CtlGrupo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreGrupo;

    /**
     * @var \DateTime
     */
    private $registroSchema;

    /**
     * @var integer
     */
    private $enableSchema;

    /**
     * @var integer
     */
    private $codigoGrupo;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlGrupo
     */
    private $grupo;

    /**
     * @var \Minsal\CoreBundle\Entity\CatSuministro
     */
    private $suministro;


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
     * Set nombreGrupo
     *
     * @param string $nombreGrupo
     * @return CtlGrupo
     */
    public function setNombreGrupo($nombreGrupo)
    {
        $this->nombreGrupo = $nombreGrupo;

        return $this;
    }

    /**
     * Get nombreGrupo
     *
     * @return string 
     */
    public function getNombreGrupo()
    {
        return $this->nombreGrupo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlGrupo
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
     * @return CtlGrupo
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
     * Set codigoGrupo
     *
     * @param integer $codigoGrupo
     * @return CtlGrupo
     */
    public function setCodigoGrupo($codigoGrupo)
    {
        $this->codigoGrupo = $codigoGrupo;

        return $this;
    }

    /**
     * Get codigoGrupo
     *
     * @return integer 
     */
    public function getCodigoGrupo()
    {
        return $this->codigoGrupo;
    }

    /**
     * Set grupo
     *
     * @param \Minsal\CoreBundle\Entity\CtlGrupo $grupo
     * @return CtlGrupo
     */
    public function setGrupo(\Minsal\CoreBundle\Entity\CtlGrupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \Minsal\CoreBundle\Entity\CtlGrupo 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set suministro
     *
     * @param \Minsal\CoreBundle\Entity\CatSuministro $suministro
     * @return CtlGrupo
     */
    public function setSuministro(\Minsal\CoreBundle\Entity\CatSuministro $suministro = null)
    {
        $this->suministro = $suministro;

        return $this;
    }

    /**
     * Get suministro
     *
     * @return \Minsal\CoreBundle\Entity\CatSuministro 
     */
    public function getSuministro()
    {
        return $this->suministro;
    }
    
    public function __toString() {
        return $this->getNombreGrupo();
    }
}
