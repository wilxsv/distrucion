<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnEntregas
 *
 * @ORM\Table(name="trn_entregas", indexes={@ORM\Index(name="IDX_3CBBE85978372CFD", columns={"id_vale_provisional"})})
 * @ORM\Entity
 */
class TrnEntregas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trn_entregas_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_distribuida", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $cantidadDistribuida;

    /**
     * @var integer
     *
     * @ORM\Column(name="trn_detalleid", type="integer", nullable=false)
     */
    private $trnDetalleid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_documeento", type="date", nullable=true)
     */
    private $fechaDocumeento;

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
     * @var \Minsal\CoreBundle\Entity\ValeProvisional
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\ValeProvisional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vale_provisional", referencedColumnName="id")
     * })
     */
    private $idValeProvisional;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Minsal\CoreBundle\Entity\TrnDetalle", mappedBy="idTrnEntregas")
     */
    private $idTrnDetalle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTrnDetalle = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
