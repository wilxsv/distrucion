<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnDetalle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Trndetalle controller.
 *
 */
class TrnDetalleController extends Controller
{
    /**
     * Lists all trnDetalle entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trnDetalles = $em->getRepository('MinsalCoreBundle:TrnDetalle')->findAll();

        return $this->render('trndetalle/index.html.twig', array(
            'trnDetalles' => $trnDetalles,
        ));
    }

    /**
     * Creates a new trnDetalle entity.
     *
     */
    public function newAction(Request $request)
    {
        $trnDetalle = new Trndetalle();
        $form = $this->createForm('Minsal\CoreBundle\Form\TrnDetalleType', $trnDetalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trnDetalle);
            $em->flush();

            return $this->redirectToRoute('trndetalle_show', array('id' => $trnDetalle->getId()));
        }

        return $this->render('trndetalle/new.html.twig', array(
            'trnDetalle' => $trnDetalle,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trnDetalle entity.
     *
     */
    public function showAction(TrnDetalle $trnDetalle)
    {
        $deleteForm = $this->createDeleteForm($trnDetalle);

        return $this->render('trndetalle/show.html.twig', array(
            'trnDetalle' => $trnDetalle,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trnDetalle entity.
     *
     */
    public function editAction(Request $request, TrnDetalle $trnDetalle)
    {
        $deleteForm = $this->createDeleteForm($trnDetalle);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnDetalleType', $trnDetalle);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trndetalle_edit', array('id' => $trnDetalle->getId()));
        }

        return $this->render('trndetalle/edit.html.twig', array(
            'trnDetalle' => $trnDetalle,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trnDetalle entity.
     *
     */
    public function deleteAction(Request $request, TrnDetalle $trnDetalle)
    {
        $form = $this->createDeleteForm($trnDetalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trnDetalle);
            $em->flush();
        }

        return $this->redirectToRoute('trndetalle_index');
    }

    /**
     * Creates a form to delete a trnDetalle entity.
     *
     * @param TrnDetalle $trnDetalle The trnDetalle entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrnDetalle $trnDetalle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trndetalle_delete', array('id' => $trnDetalle->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
