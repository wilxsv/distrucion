<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatEstablecimiento
 *
 * @ORM\Table(name="cat_establecimiento")
 * @ORM\Entity
 */
class CatEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cat_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_establecimiento", type="integer", nullable=true)
     */
    private $idTipoEstablecimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=300, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="latitud", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $latitud;

    /**
     * @var string
     *
     * @ORM\Column(name="longitud", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $longitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_institucion", type="integer", nullable=true)
     */
    private $idInstitucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_municipio", type="integer", nullable=true)
     */
    private $idMunicipio;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio_apertura", type="integer", nullable=true)
     */
    private $anioApertura;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cat_nivel_minsal", type="integer", nullable=true)
     */
    private $idCatNivelMinsal;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_establecimiento_padre", type="integer", nullable=true)
     */
    private $idEstablecimientoPadre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=true)
     */
    private $registroSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_schema", type="integer", nullable=true)
     */
    private $enableSchema;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Minsal\CoreBundle\Entity\TrnAsignacion", mappedBy="idCatEstablecimiento")
     */
    private $trnAsignacionid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trnAsignacionid = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
