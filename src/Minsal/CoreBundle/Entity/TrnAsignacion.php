<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnAsignacion
 */
class TrnAsignacion
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
    private $fechaModificaion;

    /**
     * @var string
     */
    private $prioridad;

    /**
     * @var \Minsal\CoreBundle\Entity\SegUsuario
     */
    private $segUsuarioid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatEstados
     */
    private $catEstadosid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatProgramas
     */
    private $catProgramaid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatSuministro
     */
    private $catSuministroid;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlGrupo
     */
    private $apiGruposuministroid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idCatEstablecimiento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCatEstablecimiento = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TrnAsignacion
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
     * @return TrnAsignacion
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
     * @return TrnAsignacion
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
     * @return TrnAsignacion
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
     * @return TrnAsignacion
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
     * @return TrnAsignacion
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
     * @return TrnAsignacion
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
     * @return TrnAsignacion
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
     * @return TrnAsignacion
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
     * Set fechaModificaion
     *
     * @param \DateTime $fechaModificaion
     * @return TrnAsignacion
     */
    public function setFechaModificaion($fechaModificaion)
    {
        $this->fechaModificaion = $fechaModificaion;

        return $this;
    }

    /**
     * Get fechaModificaion
     *
     * @return \DateTime
     */
    public function getFechaModificaion()
    {
        return $this->fechaModificaion;
    }

    /**
     * Set prioridad
     *
     * @param string $prioridad
     * @return TrnAsignacion
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return string
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set segUsuarioid
     *
     * @param \Minsal\CoreBundle\Entity\SegUsuario $segUsuarioid
     * @return TrnAsignacion
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
     * Set catEstadosid
     *
     * @param \Minsal\CoreBundle\Entity\CatEstados $catEstadosid
     * @return TrnAsignacion
     */
    public function setCatEstadosid(\Minsal\CoreBundle\Entity\CatEstados $catEstadosid = null)
    {
        $this->catEstadosid = $catEstadosid;

        return $this;
    }

    /**
     * Get catEstadosid
     *
     * @return \Minsal\CoreBundle\Entity\CatEstados
     */
    public function getCatEstadosid()
    {
        return $this->catEstadosid;
    }

    /**
     * Set catProgramaid
     *
     * @param \Minsal\CoreBundle\Entity\CatProgramas $catProgramaid
     * @return TrnAsignacion
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
     * Set catSuministroid
     *
     * @param \Minsal\CoreBundle\Entity\CatSuministro $catSuministroid
     * @return TrnAsignacion
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
     * Set apiGruposuministroid
     *
     * @param \Minsal\CoreBundle\Entity\CtlGrupo $apiGruposuministroid
     * @return TrnAsignacion
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
     * Add idCatEstablecimiento
     *
     * @param \Minsal\CoreBundle\Entity\CatEstablecimiento $idCatEstablecimiento
     * @return TrnAsignacion
     */
    public function addIdCatEstablecimiento(\Minsal\CoreBundle\Entity\CatEstablecimiento $idCatEstablecimiento)
    {
        $this->idCatEstablecimiento[] = $idCatEstablecimiento;

        return $this;
    }

    /**
     * Remove idCatEstablecimiento
     *
     * @param \Minsal\CoreBundle\Entity\CatEstablecimiento $idCatEstablecimiento
     */
    public function removeIdCatEstablecimiento(\Minsal\CoreBundle\Entity\CatEstablecimiento $idCatEstablecimiento)
    {
        $this->idCatEstablecimiento->removeElement($idCatEstablecimiento);
    }

    /**
     * Get idCatEstablecimiento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCatEstablecimiento()
    {
        return $this->idCatEstablecimiento;
    }
}
