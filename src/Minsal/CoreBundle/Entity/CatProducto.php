<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatProducto
 *
 * @ORM\Table(name="cat_producto")
 * @ORM\Entity
 */
class CatProducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cat_producto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_nu", type="string", length=255, nullable=true)
     */
    private $codigoNu;

    /**
     * @var integer
     *
     * @ORM\Column(name="grupoid", type="integer", nullable=true)
     */
    private $grupoid;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_sinab", type="string", length=10, nullable=false)
     */
    private $codigoSinab;

    /**
     * @var boolean
     *
     * @ORM\Column(name="listado_oficial", type="boolean", nullable=true)
     */
    private $listadoOficial;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_largo_insumo", type="text", nullable=true)
     */
    private $nombreLargoInsumo;

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
     * @ORM\ManyToMany(targetEntity="Minsal\CoreBundle\Entity\TrnAsignacion", mappedBy="catProductoid")
     */
    private $trnAsignacionid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Minsal\CoreBundle\Entity\ValeProvisional", mappedBy="catProductoid")
     */
    private $idValeProvisional;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trnAsignacionid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idValeProvisional = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
