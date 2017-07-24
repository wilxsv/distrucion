<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlGrupo
 *
 * @ORM\Table(name="ctl_grupo", indexes={@ORM\Index(name="IDX_501FC6D876A39933", columns={"api_gruposuministroid"}), @ORM\Index(name="IDX_501FC6D8F44034C1", columns={"cat_suministroid"})})
 * @ORM\Entity
 */
class CtlGrupo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_grupo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_grupo", type="string", length=255, nullable=false)
     */
    private $nombreGrupo;

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
     * @var integer
     *
     * @ORM\Column(name="codigo_grupo", type="bigint", nullable=true)
     */
    private $codigoGrupo;

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


}
