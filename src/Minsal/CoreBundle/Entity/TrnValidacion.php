<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnValidacion
 *
 * @ORM\Table(name="trn_validacion", indexes={@ORM\Index(name="IDX_EA1D469C140FD2A0", columns={"seg_usuarioid"})})
 * @ORM\Entity
 */
class TrnValidacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trn_validacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_verificado", type="boolean", nullable=true)
     */
    private $estadoVerificado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="date", nullable=true)
     */
    private $fechaModificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_prelimimar", type="integer", nullable=true)
     */
    private $cantidadPrelimimar;

    /**
     * @var \Minsal\CoreBundle\Entity\SegUsuario
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\SegUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seg_usuarioid", referencedColumnName="id")
     * })
     */
    private $segUsuarioid;


}
