<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnDetalle
 *
 * @ORM\Table(name="trn_detalle", uniqueConstraints={@ORM\UniqueConstraint(name="trn_detalle_trn_asignacionid_key", columns={"trn_asignacionid"})}, indexes={@ORM\Index(name="IDX_D232DD2AD77BFB9A", columns={"id_trn_validacion"})})
 * @ORM\Entity
 */
class TrnDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trn_detalle_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cpm", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $cpm;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_distribuir", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $cantidadDistribuir;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_sugerida", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $cantidadSugerida;

    /**
     * @var string
     *
     * @ORM\Column(name="existencia_almacenes", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $existenciaAlmacenes;

    /**
     * @var string
     *
     * @ORM\Column(name="existencia_farmacia", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $existenciaFarmacia;

    /**
     * @var integer
     *
     * @ORM\Column(name="api_establecimientoid", type="integer", nullable=false)
     */
    private $apiEstablecimientoid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_productoid", type="integer", nullable=false)
     */
    private $catProductoid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="verificar", type="boolean", nullable=true)
     */
    private $verificar;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

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
     * @var \Minsal\CoreBundle\Entity\TrnValidacion
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\TrnValidacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_trn_validacion", referencedColumnName="id")
     * })
     */
    private $idTrnValidacion;

    /**
     * @var \Minsal\CoreBundle\Entity\TrnAsignacion
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\TrnAsignacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trn_asignacionid", referencedColumnName="id")
     * })
     */
    private $trnAsignacionid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Minsal\CoreBundle\Entity\TrnEntregas", inversedBy="idTrnDetalle")
     * @ORM\JoinTable(name="trn_detalles_entregas",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_trn_detalle", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_trn_entregas", referencedColumnName="id")
     *   }
     * )
     */
    private $idTrnEntregas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTrnEntregas = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
