<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatSuministro
 *
 * @ORM\Table(name="cat_suministro", indexes={@ORM\Index(name="IDX_8048948FF44034C1", columns={"cat_suministroid"})})
 * @ORM\Entity
 */
class CatSuministro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cat_suministro_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_suministro", type="string", length=255, nullable=false)
     */
    private $nombreSuministro;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_suministro", type="string", length=255, nullable=true)
     */
    private $detalleSuministro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=true)
     */
    private $registroSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_schema", type="text", nullable=true)
     */
    private $detalleSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_schema", type="bigint", nullable=true)
     */
    private $userIdSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user_schema", type="string", nullable=true)
     */
    private $ipUserSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_schema", type="integer", nullable=true)
     */
    private $estadoSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_schame", type="integer", nullable=true)
     */
    private $enableSchame;

    /**
     * @var integer
     *
     * @ORM\Column(name="codificacion_suministro", type="bigint", nullable=false)
     */
    private $codificacionSuministro;

    /**
     * @var integer
     *
     * @ORM\Column(name="rol_solicita_suministro", type="bigint", nullable=false)
     */
    private $rolSolicitaSuministro;

    /**
     * @var integer
     *
     * @ORM\Column(name="rol_valida_suministro", type="bigint", nullable=false)
     */
    private $rolValidaSuministro;

    /**
     * @var \Minsal\CoreBundle\Entity\CatSuministro
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\CatSuministro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_suministroid", referencedColumnName="id")
     * })
     */
    private $catSuministroid;


}
