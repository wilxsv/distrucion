<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CatEstablecimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Catestablecimiento controller.
 *
 */
class CatEstablecimientoController extends Controller
{
    /**
     * Lists all catEstablecimiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catEstablecimientos = $em->getRepository('MinsalCoreBundle:CatEstablecimiento')->findAll();

        return $this->render('catestablecimiento/index.html.twig', array(
            'catEstablecimientos' => $catEstablecimientos,
        ));
    }

    /**
     * Finds and displays a catEstablecimiento entity.
     *
     */
    public function showAction(CatEstablecimiento $catEstablecimiento)
    {

        return $this->render('catestablecimiento/show.html.twig', array(
            'catEstablecimiento' => $catEstablecimiento,
        ));
    }
}
