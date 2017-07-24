<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlGrupo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Ctlgrupo controller.
 *
 */
class CtlGrupoController extends Controller
{
    /**
     * Lists all ctlGrupo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ctlGrupos = $em->getRepository('MinsalCoreBundle:CtlGrupo')->findAll();

        return $this->render('ctlgrupo/index.html.twig', array(
            'ctlGrupos' => $ctlGrupos,
        ));
    }

    /**
     * Finds and displays a ctlGrupo entity.
     *
     */
    public function showAction(CtlGrupo $ctlGrupo)
    {

        return $this->render('ctlgrupo/show.html.twig', array(
            'ctlGrupo' => $ctlGrupo,
        ));
    }
}
