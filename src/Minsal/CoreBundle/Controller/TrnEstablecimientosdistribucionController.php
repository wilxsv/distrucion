<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnEstablecimientosdistribucion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Trnestablecimientosdistribucion controller.
 *
 * @Route("trnestablecimientosdistribucion")
 */
class TrnEstablecimientosdistribucionController extends Controller
{
    /**
     * Lists all trnEstablecimientosdistribucion entities.
     *
     * @Route("/", name="trnestablecimientosdistribucion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trnEstablecimientosdistribucions = $em->getRepository('MinsalCoreBundle:TrnEstablecimientosdistribucion')->findAll();

        return $this->render('trnestablecimientosdistribucion/index.html.twig', array(
            'trnEstablecimientosdistribucions' => $trnEstablecimientosdistribucions,
        ));
    }

    /**
     * Creates a new trnEstablecimientosdistribucion entity.
     *
     * @Route("/new", name="trnestablecimientosdistribucion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $trnEstablecimientosdistribucion = new Trnestablecimientosdistribucion();
        $form = $this->createForm('Minsal\CoreBundle\Form\TrnEstablecimientosdistribucionType', $trnEstablecimientosdistribucion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trnEstablecimientosdistribucion);
            $em->flush();

            return $this->redirectToRoute('trnestablecimientosdistribucion_show', array('apiEstablecimientoid' => $trnEstablecimientosdistribucion->getApiestablecimientoid()));
        }

        return $this->render('trnestablecimientosdistribucion/new.html.twig', array(
            'trnEstablecimientosdistribucion' => $trnEstablecimientosdistribucion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trnEstablecimientosdistribucion entity.
     *
     * @Route("/{apiEstablecimientoid}", name="trnestablecimientosdistribucion_show")
     * @Method("GET")
     */
    public function showAction(TrnEstablecimientosdistribucion $trnEstablecimientosdistribucion)
    {
        $deleteForm = $this->createDeleteForm($trnEstablecimientosdistribucion);

        return $this->render('trnestablecimientosdistribucion/show.html.twig', array(
            'trnEstablecimientosdistribucion' => $trnEstablecimientosdistribucion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trnEstablecimientosdistribucion entity.
     *
     * @Route("/{apiEstablecimientoid}/edit", name="trnestablecimientosdistribucion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TrnEstablecimientosdistribucion $trnEstablecimientosdistribucion)
    {
        $deleteForm = $this->createDeleteForm($trnEstablecimientosdistribucion);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnEstablecimientosdistribucionType', $trnEstablecimientosdistribucion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trnestablecimientosdistribucion_edit', array('apiEstablecimientoid' => $trnEstablecimientosdistribucion->getApiestablecimientoid()));
        }

        return $this->render('trnestablecimientosdistribucion/edit.html.twig', array(
            'trnEstablecimientosdistribucion' => $trnEstablecimientosdistribucion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trnEstablecimientosdistribucion entity.
     *
     * @Route("/{apiEstablecimientoid}", name="trnestablecimientosdistribucion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TrnEstablecimientosdistribucion $trnEstablecimientosdistribucion)
    {
        $form = $this->createDeleteForm($trnEstablecimientosdistribucion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trnEstablecimientosdistribucion);
            $em->flush();
        }

        return $this->redirectToRoute('trnestablecimientosdistribucion_index');
    }

    /**
     * Creates a form to delete a trnEstablecimientosdistribucion entity.
     *
     * @param TrnEstablecimientosdistribucion $trnEstablecimientosdistribucion The trnEstablecimientosdistribucion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrnEstablecimientosdistribucion $trnEstablecimientosdistribucion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trnestablecimientosdistribucion_delete', array('apiEstablecimientoid' => $trnEstablecimientosdistribucion->getApiestablecimientoid())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
