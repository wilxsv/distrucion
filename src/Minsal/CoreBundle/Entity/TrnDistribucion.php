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
    private $apiAlmacenid;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fechadistribucion;

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
     * @var \Minsal\CoreBundle\Entity\CatEstados
     */
    private $catEstadoid;

    /**
     * @var \Minsal\CoreBundle\Entity\SegUsuario
     */
    private $segUsuarioid;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlGrupo
     */
    private $apiGruposuministroid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatSuministro
     */
    private $catSuministroid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatProgramas
     */
    private $catProgramaid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlInsumo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $apiEstablecimientoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlInsumo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->apiEstablecimientoid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set apiGruposuministroid
     *
     * @param \Minsal\CoreBundle\Entity\CtlGrupo $apiGruposuministroid
     * @return TrnDistribucion
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
     * @return TrnDistribucion
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

    /**
     * Set catProgramaid
     *
     * @param \Minsal\CoreBundle\Entity\CatProgramas $catProgramaid
     * @return TrnDistribucion
     */
    public function setCatProgramaid(\Minsal\CoreBundle\Entity\CatProgramas $catProgramaid = null)
    {
        $this->catProgramaid = $catProgramaid;

        return $this;
    }

    /**
     * Get catProgramaid
     *
     * @return \Minsal\CoreBundle\Entity\CatProgramas 
     */
    public function getCatProgramaid()
    {
        return $this->catProgramaid;
    }

    /**
     * Add ctlInsumo
     *
     * @param \Minsal\CoreBundle\Entity\CatInsumo $ctlInsumo
     * @return TrnDistribucion
     */
    public function addCtlInsumo(\Minsal\CoreBundle\Entity\CatInsumo $ctlInsumo)
    {
        $this->ctlInsumo[] = $ctlInsumo;

        return $this;
    }

    /**
     * Remove ctlInsumo
     *
     * @param \Minsal\CoreBundle\Entity\CatInsumo $ctlInsumo
     */
    public function removeCtlInsumo(\Minsal\CoreBundle\Entity\CatInsumo $ctlInsumo)
    {
        $this->ctlInsumo->removeElement($ctlInsumo);
    }

    /**
     * Get ctlInsumo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlInsumo()
    {
        return $this->ctlInsumo;
    }

    /**
     * Add apiEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CatEstablecimiento $apiEstablecimientoid
     * @return TrnDistribucion
     */
    public function addApiEstablecimientoid(\Minsal\CoreBundle\Entity\CatEstablecimiento $apiEstablecimientoid)
    {
        $this->apiEstablecimientoid[] = $apiEstablecimientoid;

        return $this;
    }

    /**
     * Remove apiEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CatEstablecimiento $apiEstablecimientoid
     */
    public function removeApiEstablecimientoid(\Minsal\CoreBundle\Entity\CatEstablecimiento $apiEstablecimientoid)
    {
        $this->apiEstablecimientoid->removeElement($apiEstablecimientoid);
    }

    /**
     * Get apiEstablecimientoid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getApiEstablecimientoid()
    {
        return $this->apiEstablecimientoid;
    }
}
