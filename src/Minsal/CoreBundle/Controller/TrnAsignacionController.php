<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnAsignacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Trnasignacion controller.
 *
 */
class TrnAsignacionController extends Controller
{
    /**
     * Lists all trnAsignacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trnAsignacions = $em->getRepository('MinsalCoreBundle:TrnAsignacion')->findAll();

        return $this->render('trnasignacion/index.html.twig', array(
            'trnAsignacions' => $trnAsignacions,
        ));
    }

    /**
     * Creates a new trnAsignacion entity.
     *
     */
    public function newAction(Request $request)
    {
        $trnAsignacion = new Trnasignacion();
        $form = $this->createForm('Minsal\CoreBundle\Form\TrnAsignacionType', $trnAsignacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trnAsignacion);
            $em->flush();

            return $this->redirectToRoute('trnasignacion_show', array('id' => $trnAsignacion->getId()));
        }

        return $this->render('trnasignacion/new.html.twig', array(
            'trnAsignacion' => $trnAsignacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trnAsignacion entity.
     *
     */
    public function showAction(TrnAsignacion $trnAsignacion)
    {
        $deleteForm = $this->createDeleteForm($trnAsignacion);

        return $this->render('trnasignacion/show.html.twig', array(
            'trnAsignacion' => $trnAsignacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trnAsignacion entity.
     *
     */
    public function editAction(Request $request, TrnAsignacion $trnAsignacion)
    {
        $deleteForm = $this->createDeleteForm($trnAsignacion);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnAsignacionType', $trnAsignacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trnasignacion_edit', array('id' => $trnAsignacion->getId()));
        }

        return $this->render('trnasignacion/edit.html.twig', array(
            'trnAsignacion' => $trnAsignacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trnAsignacion entity.
     *
     */
    public function deleteAction(Request $request, TrnAsignacion $trnAsignacion)
    {
        $form = $this->createDeleteForm($trnAsignacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trnAsignacion);
            $em->flush();
        }

        return $this->redirectToRoute('trnasignacion_index');
    }

    /**
     * Creates a form to delete a trnAsignacion entity.
     *
     * @param TrnAsignacion $trnAsignacion The trnAsignacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrnAsignacion $trnAsignacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trnasignacion_delete', array('id' => $trnAsignacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
