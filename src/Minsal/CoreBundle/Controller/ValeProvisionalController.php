<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\ValeProvisional;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Valeprovisional controller.
 *
 */
class ValeProvisionalController extends Controller
{
    /**
     * Lists all valeProvisional entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $valeProvisionals = $em->getRepository('MinsalCoreBundle:ValeProvisional')->findAll();

        return $this->render('valeprovisional/index.html.twig', array(
            'valeProvisionals' => $valeProvisionals,
        ));
    }

    /**
     * Finds and displays a valeProvisional entity.
     *
     */
    public function showAction(ValeProvisional $valeProvisional)
    {

        return $this->render('valeprovisional/show.html.twig', array(
            'valeProvisional' => $valeProvisional,
        ));
    }
}
