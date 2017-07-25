<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CatProgramas;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Catprograma controller.
 *
 */
class CatProgramasController extends Controller
{
    /**
     * Lists all catPrograma entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catProgramas = $em->getRepository('MinsalCoreBundle:CatProgramas')->findAll();

        return $this->render('catprogramas/index.html.twig', array(
            'catProgramas' => $catProgramas,
        ));
    }

    /**
     * Finds and displays a catPrograma entity.
     *
     */
    public function showAction(CatProgramas $catPrograma)
    {

        return $this->render('catprogramas/show.html.twig', array(
            'catPrograma' => $catPrograma,
        ));
    }
}
