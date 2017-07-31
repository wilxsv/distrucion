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
     * @var integer
     */
    private $grupoId;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlGrupo
     */
    private $apiGruposuministroid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatSuministro
     */
    private $catSuministroid;


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
     * Set grupoId
     *
     * @param integer $grupoId
     * @return CtlGrupo
     */
    public function setGrupoId($grupoId)
    {
        $this->grupoId = $grupoId;

        return $this;
    }

    /**
     * Get grupoId
     *
     * @return integer
     */
    public function getGrupoId()
    {
        return $this->grupoId;
    }

    /**
     * Set apiGruposuministroid
     *
     * @param \Minsal\CoreBundle\Entity\CtlGrupo $apiGruposuministroid
     * @return CtlGrupo
     */
    public function setApiGruposuministroid(\Minsal\CoreBundle\Entity\CtlGrupo $apiGruposuministroid = null)
    {
        $this->apiGruposuministroid = $apiGruposuministroid;

        return $this;
    }

    /**
     * Get apiGruposuministroid
     *
     * @return \Minsal\CoreBundle\Entity\CtlGrupo
     */
    public function getApiGruposuministroid()
    {
        return $this->apiGruposuministroid;
    }

    /**
     * Set catSuministroid
     *
     * @param \Minsal\CoreBundle\Entity\CatSuministro $catSuministroid
     * @return CtlGrupo
     */
    public function setCatSuministroid(\Minsal\CoreBundle\Entity\CatSuministro $catSuministroid = null)
    {
        $this->catSuministroid = $catSuministroid;

        return $this;
    }

    /**
     * Get catSuministroid
     *
     * @return \Minsal\CoreBundle\Entity\CatSuministro
     */
    public function getCatSuministroid()
    {
        return $this->catSuministroid;
    }
}
