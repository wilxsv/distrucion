<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnEntregas;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Trnentrega controller.
 *
 */
class TrnEntregasController extends Controller
{
    /**
     * Lists all trnEntrega entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trnEntregas = $em->getRepository('MinsalCoreBundle:TrnEntregas')->findAll();

        return $this->render('trnentregas/index.html.twig', array(
            'trnEntregas' => $trnEntregas,
        ));
    }

    /**
     * Creates a new trnEntrega entity.
     *
     */
    public function newAction(Request $request)
    {
        $trnEntrega = new Trnentrega();
        $form = $this->createForm('Minsal\CoreBundle\Form\TrnEntregasType', $trnEntrega);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trnEntrega);
            $em->flush();

            return $this->redirectToRoute('trnentregas_show', array('id' => $trnEntrega->getId()));
        }

        return $this->render('trnentregas/new.html.twig', array(
            'trnEntrega' => $trnEntrega,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trnEntrega entity.
     *
     */
    public function showAction(TrnEntregas $trnEntrega)
    {
        $deleteForm = $this->createDeleteForm($trnEntrega);

        return $this->render('trnentregas/show.html.twig', array(
            'trnEntrega' => $trnEntrega,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trnEntrega entity.
     *
     */
    public function editAction(Request $request, TrnEntregas $trnEntrega)
    {
        $deleteForm = $this->createDeleteForm($trnEntrega);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnEntregasType', $trnEntrega);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trnentregas_edit', array('id' => $trnEntrega->getId()));
        }

        return $this->render('trnentregas/edit.html.twig', array(
            'trnEntrega' => $trnEntrega,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trnEntrega entity.
     *
     */
    public function deleteAction(Request $request, TrnEntregas $trnEntrega)
    {
        $form = $this->createDeleteForm($trnEntrega);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trnEntrega);
            $em->flush();
        }

        return $this->redirectToRoute('trnentregas_index');
    }

    /**
     * Creates a form to delete a trnEntrega entity.
     *
     * @param TrnEntregas $trnEntrega The trnEntrega entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrnEntregas $trnEntrega)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trnentregas_delete', array('id' => $trnEntrega->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
