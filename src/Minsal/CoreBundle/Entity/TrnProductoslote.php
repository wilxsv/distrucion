<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrnProductoslote
 *
 * @ORM\Table(name="trn_productoslote", indexes={@ORM\Index(name="IDX_CEB51674BC0DA83B", columns={"cat_productoid"})})
 * @ORM\Entity
 */
class TrnProductoslote
{
    /**
     * @var integer
     *
     * @ORM\Column(name="api_loteid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trn_productoslote_api_loteid_seq", allocationSize=1, initialValue=1)
     */
    private $apiLoteid;

    /**
     * @var integer
     *
     * @ORM\Column(name="existencia", type="integer", nullable=true)
     */
    private $existencia;

    /**
     * @var \Minsal\CoreBundle\Entity\CatProducto
     *
     * @ORM\ManyToOne(targetEntity="Minsal\CoreBundle\Entity\CatProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cat_productoid", referencedColumnName="id")
     * })
     */
    private $catProductoid;


}
