<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CatProducto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Catproducto controller.
 *
 */
class CatProductoController extends Controller
{
    /**
     * Lists all catProducto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catProductos = $em->getRepository('MinsalCoreBundle:CatProducto')->findAll();

        return $this->render('catproducto/index.html.twig', array(
            'catProductos' => $catProductos,
        ));
    }

    /**
     * Finds and displays a catProducto entity.
     *
     */
    public function showAction(CatProducto $catProducto)
    {

        return $this->render('catproducto/show.html.twig', array(
            'catProducto' => $catProducto,
        ));
    }
}
