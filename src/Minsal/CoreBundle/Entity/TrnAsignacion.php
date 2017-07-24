<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnAsignacion
 *
 * @ORM\Table(name="trn_asignacion", indexes={@ORM\Index(name="IDX_141DE0A5140FD2A0", columns={"seg_usuarioid"}), @ORM\Index(name="IDX_141DE0A5415AC3E0", columns={"cat_estadosid"}), @ORM\Index(name="IDX_141DE0A5CDAFE461", columns={"cat_programaid"}), @ORM\Index(name="IDX_141DE0A5F44034C1", columns={"cat_suministroid"}), @ORM\Index(name="IDX_141DE0A576A39933", columns={"api_gruposuministroid"})})
 * @ORM\Entity
 */
class TrnAsignacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trn_asignacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="api_almacenid", type="integer", nullable=false)
     */
    private $apiAlmacenid;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadistribucion", type="date", nullable=false)
     */
    private $fechadistribucion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacorte", type="date", nullable=true)
     */
    private $fechacorte;

    /**
     * @var integer
     *
     * @ORM\Column(name="meses_cpm", type="smallint", nullable=true)
     */
    private $mesesCpm;

    /**
     * @var integer
     *
     * @ORM\Column(name="meses_distribucion", type="smallint", nullable=true)
     */
    private $mesesDistribucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="meses_administracion", type="smallint", nullable=true)
     */
    private $mesesAdministracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="meses_seguridad", type="smallint", nullable=true)
     */
    private $mesesSeguridad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificaion", type="date", nullable=true)
     */
    private $fechaModificaion;

    /**
     * @var string
     *
     * @ORM\Column(name="prioridad", type="text", nullable=true)
     */
    private $prioridad;

    /**
     * @var \Minsal\CoreBundle\Entity\SegUsuario
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\SegUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seg_usuarioid", referencedColumnName="id")
     * })
     */
    private $segUsuarioid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatEstados
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\CatEstados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_estadosid", referencedColumnName="id")
     * })
     */
    private $catEstadosid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatProgramas
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\CatProgramas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_programaid", referencedColumnName="id")
     * })
     */
    private $catProgramaid;

    /**
     * @var \Minsal\CoreBundle\Entity\CatSuministro
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\CatSuministro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_suministroid", referencedColumnName="id")
     * })
     */
    private $catSuministroid;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlGrupo
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\CtlGrupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="api_gruposuministroid", referencedColumnName="id")
     * })
     */
    private $apiGruposuministroid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Minsal\CoreBundle\Entity\CatProducto", inversedBy="trnAsignacionid")
     * @ORM\JoinTable(name="distribucion_producto",
     *   joinColumns={
     *     @ORM\JoinColumn(name="trn_asignacionid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cat_productoid", referencedColumnName="id")
     *   }
     * )
     */
    private $catProductoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Minsal\CoreBundle\Entity\CatEstablecimiento", inversedBy="trnAsignacionid")
     * @ORM\JoinTable(name="trn_establecimientosdistribucion",
     *   joinColumns={
     *     @ORM\JoinColumn(name="trn_asignacionid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_cat_establecimiento", referencedColumnName="id")
     *   }
     * )
     */
    private $idCatEstablecimiento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->catProductoid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idCatEstablecimiento = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
