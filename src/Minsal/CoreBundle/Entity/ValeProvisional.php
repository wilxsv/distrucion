<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValeProvisional
 *
 * @ORM\Table(name="vale_provisional", indexes={@ORM\Index(name="IDX_9BBD792C140FD2A0", columns={"seg_usuarioid"})})
 * @ORM\Entity
 */
class ValeProvisional
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="vale_provisional_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=false)
     */
    private $fechaCreacion;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Minsal\CoreBundle\Entity\CatProducto", inversedBy="idValeProvisional")
     * @ORM\JoinTable(name="vale_productos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_vale_provisional", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cat_productoid", referencedColumnName="id")
     *   }
     * )
     */
    private $catProductoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->catProductoid = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
