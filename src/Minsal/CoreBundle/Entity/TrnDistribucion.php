<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnDistribucion
 *
 * @ORM\Table(name="trn_distribucion", uniqueConstraints={@ORM\UniqueConstraint(name="trn_distribucion_id", columns={"id"})}, indexes={@ORM\Index(name="IDX_32D979D39F4F768F", columns={"cat_estadoid"}), @ORM\Index(name="IDX_32D979D3140FD2A0", columns={"seg_usuarioid"}), @ORM\Index(name="IDX_32D979D376A39933", columns={"api_gruposuministroid"}), @ORM\Index(name="IDX_32D979D3F44034C1", columns={"cat_suministroid"}), @ORM\Index(name="IDX_32D979D3CDAFE461", columns={"cat_programaid"})})
 * @ORM\Entity
 */
class TrnDistribucion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trn_distribucion_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="fecha_modificacion", type="date", nullable=true)
     */
    private $fechaModificacion;

    /**
     * @var \Minsal\CoreBundle\Entity\CatEstados
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\CatEstados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_estadoid", referencedColumnName="id")
     * })
     */
    private $catEstadoid;

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
     * @var \Minsal\CoreBundle\Entity\CtlGrupo
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\CtlGrupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="api_gruposuministroid", referencedColumnName="id")
     * })
     */
    private $apiGruposuministroid;

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
     * @var \Minsal\CoreBundle\Entity\CatProgramas
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\CatProgramas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_programaid", referencedColumnName="id")
     * })
     */
    private $catProgramaid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Minsal\CoreBundle\Entity\CatInsumo", inversedBy="trnDistribucion")
     * @ORM\JoinTable(name="distribucion_producto",
     *   joinColumns={
     *     @ORM\JoinColumn(name="trn_distribucion_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ctl_insumo_id", referencedColumnName="id")
     *   }
     * )
     */
    private $ctlInsumo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Minsal\CoreBundle\Entity\CatEstablecimiento", mappedBy="trnDistribucionid")
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

}
