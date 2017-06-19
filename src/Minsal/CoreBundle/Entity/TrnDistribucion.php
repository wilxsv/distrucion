<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnDistribucion
 */
class TrnDistribucion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $apiSuministroid;

    /**
     * @var integer
     */
    private $apiAlmacenid;

    /**
     * @var integer
     */
    private $apiProgramaid;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fechadistribucion;

    /**
     * @var integer
     */
    private $apiGruposuministroid;

    /**
     * @var integer
     */
    private $apiSubgruposuministroid;

    /**
     * @var \DateTime
     */
    private $fechacorte;

    /**
     * @var integer
     */
    private $mesesCpm;

    /**
     * @var integer
     */
    private $mesesDistribucion;

    /**
     * @var integer
     */
    private $mesesAdministracion;

    /**
     * @var integer
     */
    private $mesesSeguridad;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var \Minsal\CoreBundle\Entity\SegUsuario
     */
    private $segUsuarioid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatEstados
     */
    private $catEstadoid;


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
     * Set apiSuministroid
     *
     * @param integer $apiSuministroid
     * @return TrnDistribucion
     */
    public function setApiSuministroid($apiSuministroid)
    {
        $this->apiSuministroid = $apiSuministroid;

        return $this;
    }

    /**
     * Get apiSuministroid
     *
     * @return integer 
     */
    public function getApiSuministroid()
    {
        return $this->apiSuministroid;
    }

    /**
     * Set apiAlmacenid
     *
     * @param integer $apiAlmacenid
     * @return TrnDistribucion
     */
    public function setApiAlmacenid($apiAlmacenid)
    {
        $this->apiAlmacenid = $apiAlmacenid;

        return $this;
    }

    /**
     * Get apiAlmacenid
     *
     * @return integer 
     */
    public function getApiAlmacenid()
    {
        return $this->apiAlmacenid;
    }

    /**
     * Set apiProgramaid
     *
     * @param integer $apiProgramaid
     * @return TrnDistribucion
     */
    public function setApiProgramaid($apiProgramaid)
    {
        $this->apiProgramaid = $apiProgramaid;

        return $this;
    }

    /**
     * Get apiProgramaid
     *
     * @return integer 
     */
    public function getApiProgramaid()
    {
        return $this->apiProgramaid;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TrnDistribucion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechadistribucion
     *
     * @param \DateTime $fechadistribucion
     * @return TrnDistribucion
     */
    public function setFechadistribucion($fechadistribucion)
    {
        $this->fechadistribucion = $fechadistribucion;

        return $this;
    }

    /**
     * Get fechadistribucion
     *
     * @return \DateTime 
     */
    public function getFechadistribucion()
    {
        return $this->fechadistribucion;
    }

    /**
     * Set apiGruposuministroid
     *
     * @param integer $apiGruposuministroid
     * @return TrnDistribucion
     */
    public function setApiGruposuministroid($apiGruposuministroid)
    {
        $this->apiGruposuministroid = $apiGruposuministroid;

        return $this;
    }

    /**
     * Get apiGruposuministroid
     *
     * @return integer 
     */
    public function getApiGruposuministroid()
    {
        return $this->apiGruposuministroid;
    }

    /**
     * Set apiSubgruposuministroid
     *
     * @param integer $apiSubgruposuministroid
     * @return TrnDistribucion
     */
    public function setApiSubgruposuministroid($apiSubgruposuministroid)
    {
        $this->apiSubgruposuministroid = $apiSubgruposuministroid;

        return $this;
    }

    /**
     * Get apiSubgruposuministroid
     *
     * @return integer 
     */
    public function getApiSubgruposuministroid()
    {
        return $this->apiSubgruposuministroid;
    }

    /**
     * Set fechacorte
     *
     * @param \DateTime $fechacorte
     * @return TrnDistribucion
     */
    public function setFechacorte($fechacorte)
    {
        $this->fechacorte = $fechacorte;

        return $this;
    }

    /**
     * Get fechacorte
     *
     * @return \DateTime 
     */
    public function getFechacorte()
    {
        return $this->fechacorte;
    }

    /**
     * Set mesesCpm
     *
     * @param integer $mesesCpm
     * @return TrnDistribucion
     */
    public function setMesesCpm($mesesCpm)
    {
        $this->mesesCpm = $mesesCpm;

        return $this;
    }

    /**
     * Get mesesCpm
     *
     * @return integer 
     */
    public function getMesesCpm()
    {
        return $this->mesesCpm;
    }

    /**
     * Set mesesDistribucion
     *
     * @param integer $mesesDistribucion
     * @return TrnDistribucion
     */
    public function setMesesDistribucion($mesesDistribucion)
    {
        $this->mesesDistribucion = $mesesDistribucion;

        return $this;
    }

    /**
     * Get mesesDistribucion
     *
     * @return integer 
     */
    public function getMesesDistribucion()
    {
        return $this->mesesDistribucion;
    }

    /**
     * Set mesesAdministracion
     *
     * @param integer $mesesAdministracion
     * @return TrnDistribucion
     */
    public function setMesesAdministracion($mesesAdministracion)
    {
        $this->mesesAdministracion = $mesesAdministracion;

        return $this;
    }

    /**
     * Get mesesAdministracion
     *
     * @return integer 
     */
    public function getMesesAdministracion()
    {
        return $this->mesesAdministracion;
    }

    /**
     * Set mesesSeguridad
     *
     * @param integer $mesesSeguridad
     * @return TrnDistribucion
     */
    public function setMesesSeguridad($mesesSeguridad)
    {
        $this->mesesSeguridad = $mesesSeguridad;

        return $this;
    }

    /**
     * Get mesesSeguridad
     *
     * @return integer 
     */
    public function getMesesSeguridad()
    {
        return $this->mesesSeguridad;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return TrnDistribucion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return TrnDistribucion
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set segUsuarioid
     *
     * @param \Minsal\CoreBundle\Entity\SegUsuario $segUsuarioid
     * @return TrnDistribucion
     */
    public function setSegUsuarioid(\Minsal\CoreBundle\Entity\SegUsuario $segUsuarioid = null)
    {
        $this->segUsuarioid = $segUsuarioid;

        return $this;
    }

    /**
     * Get segUsuarioid
     *
     * @return \Minsal\CoreBundle\Entity\SegUsuario 
     */
    public function getSegUsuarioid()
    {
        return $this->segUsuarioid;
    }

    /**
     * Set catEstadoid
     *
     * @param \Minsal\CoreBundle\Entity\CatEstados $catEstadoid
     * @return TrnDistribucion
     */
    public function setCatEstadoid(\Minsal\CoreBundle\Entity\CatEstados $catEstadoid = null)
    {
        $this->catEstadoid = $catEstadoid;

        return $this;
    }

    /**
     * Get catEstadoid
     *
     * @return \Minsal\CoreBundle\Entity\CatEstados 
     */
    public function getCatEstadoid()
    {
        return $this->catEstadoid;
    }
}
