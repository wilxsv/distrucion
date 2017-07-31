<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CatPrioridad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Catprioridad controller.
 *
 */
class CatPrioridadController extends Controller
{
    /**
     * Lists all catPrioridad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catPrioridads = $em->getRepository('MinsalCoreBundle:CatPrioridad')->findAll();

        return $this->render('catprioridad/index.html.twig', array(
            'catPrioridads' => $catPrioridads,
        ));
    }

    /**
     * Finds and displays a catPrioridad entity.
     *
     */
    public function showAction(CatPrioridad $catPrioridad)
    {

        return $this->render('catprioridad/show.html.twig', array(
            'catPrioridad' => $catPrioridad,
        ));
    }
}
