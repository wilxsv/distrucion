<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CatSuministro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Catsuministro controller.
 *
 */
class CatSuministroController extends Controller
{
    /**
     * Lists all catSuministro entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catSuministros = $em->getRepository('MinsalCoreBundle:CatSuministro')->findAll();

        return $this->render('catsuministro/index.html.twig', array(
            'catSuministros' => $catSuministros,
        ));
    }

    /**
     * Finds and displays a catSuministro entity.
     *
     */
    public function showAction(CatSuministro $catSuministro)
    {

        return $this->render('catsuministro/show.html.twig', array(
            'catSuministro' => $catSuministro,
        ));
    }
}
