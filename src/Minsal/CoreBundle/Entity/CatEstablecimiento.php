<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatEstablecimiento
 */
class CatEstablecimiento
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idTipoEstablecimiento;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $latitud;

    /**
     * @var string
     */
    private $longitud;

    /**
     * @var integer
     */
    private $idInstitucion;

    /**
     * @var integer
     */
    private $idMunicipio;

    /**
     * @var integer
     */
    private $anioApertura;

    /**
     * @var integer
     */
    private $idCatNivelMinsal;

    /**
     * @var integer
     */
    private $idEstablecimientoPadre;

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
    private $trnDistribucionid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trnDistribucionid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set idTipoEstablecimiento
     *
     * @param integer $idTipoEstablecimiento
     * @return CatEstablecimiento
     */
    public function setIdTipoEstablecimiento($idTipoEstablecimiento)
    {
        $this->idTipoEstablecimiento = $idTipoEstablecimiento;

        return $this;
    }

    /**
     * Get idTipoEstablecimiento
     *
     * @return integer 
     */
    public function getIdTipoEstablecimiento()
    {
        return $this->idTipoEstablecimiento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return CatEstablecimiento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return CatEstablecimiento
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return CatEstablecimiento
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return CatEstablecimiento
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     * @return CatEstablecimiento
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string 
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     * @return CatEstablecimiento
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set idInstitucion
     *
     * @param integer $idInstitucion
     * @return CatEstablecimiento
     */
    public function setIdInstitucion($idInstitucion)
    {
        $this->idInstitucion = $idInstitucion;

        return $this;
    }

    /**
     * Get idInstitucion
     *
     * @return integer 
     */
    public function getIdInstitucion()
    {
        return $this->idInstitucion;
    }

    /**
     * Set idMunicipio
     *
     * @param integer $idMunicipio
     * @return CatEstablecimiento
     */
    public function setIdMunicipio($idMunicipio)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return integer 
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set anioApertura
     *
     * @param integer $anioApertura
     * @return CatEstablecimiento
     */
    public function setAnioApertura($anioApertura)
    {
        $this->anioApertura = $anioApertura;

        return $this;
    }

    /**
     * Get anioApertura
     *
     * @return integer 
     */
    public function getAnioApertura()
    {
        return $this->anioApertura;
    }

    /**
     * Set idCatNivelMinsal
     *
     * @param integer $idCatNivelMinsal
     * @return CatEstablecimiento
     */
    public function setIdCatNivelMinsal($idCatNivelMinsal)
    {
        $this->idCatNivelMinsal = $idCatNivelMinsal;

        return $this;
    }

    /**
     * Get idCatNivelMinsal
     *
     * @return integer 
     */
    public function getIdCatNivelMinsal()
    {
        return $this->idCatNivelMinsal;
    }

    /**
     * Set idEstablecimientoPadre
     *
     * @param integer $idEstablecimientoPadre
     * @return CatEstablecimiento
     */
    public function setIdEstablecimientoPadre($idEstablecimientoPadre)
    {
        $this->idEstablecimientoPadre = $idEstablecimientoPadre;

        return $this;
    }

    /**
     * Get idEstablecimientoPadre
     *
     * @return integer 
     */
    public function getIdEstablecimientoPadre()
    {
        return $this->idEstablecimientoPadre;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CatEstablecimiento
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
     * @return CatEstablecimiento
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
     * Add trnDistribucionid
     *
     * @param \Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucionid
     * @return CatEstablecimiento
     */
    public function addTrnDistribucionid(\Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucionid)
    {
        $this->trnDistribucionid[] = $trnDistribucionid;

        return $this;
    }

    /**
     * Remove trnDistribucionid
     *
     * @param \Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucionid
     */
    public function removeTrnDistribucionid(\Minsal\CoreBundle\Entity\TrnDistribucion $trnDistribucionid)
    {
        $this->trnDistribucionid->removeElement($trnDistribucionid);
    }

    /**
     * Get trnDistribucionid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTrnDistribucionid()
    {
        return $this->trnDistribucionid;
    }
    
    public function __toString() {
        return $this->getNombre();
    }
}
