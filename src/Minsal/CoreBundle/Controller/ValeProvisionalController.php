<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\ValeProvisional;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
     * Creates a new valeProvisional entity.
     *
     */
    public function newAction(Request $request)
    {
        $valeProvisional = new Valeprovisional();
        $form = $this->createForm('Minsal\CoreBundle\Form\ValeProvisionalType', $valeProvisional);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($valeProvisional);
            $em->flush();

            return $this->redirectToRoute('valeprovisional_show', array('id' => $valeProvisional->getId()));
        }

        return $this->render('valeprovisional/new.html.twig', array(
            'valeProvisional' => $valeProvisional,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a valeProvisional entity.
     *
     */
    public function showAction(ValeProvisional $valeProvisional)
    {
        $deleteForm = $this->createDeleteForm($valeProvisional);

        return $this->render('valeprovisional/show.html.twig', array(
            'valeProvisional' => $valeProvisional,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing valeProvisional entity.
     *
     */
    public function editAction(Request $request, ValeProvisional $valeProvisional)
    {
        $deleteForm = $this->createDeleteForm($valeProvisional);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\ValeProvisionalType', $valeProvisional);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('valeprovisional_edit', array('id' => $valeProvisional->getId()));
        }

        return $this->render('valeprovisional/edit.html.twig', array(
            'valeProvisional' => $valeProvisional,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a valeProvisional entity.
     *
     */
    public function deleteAction(Request $request, ValeProvisional $valeProvisional)
    {
        $form = $this->createDeleteForm($valeProvisional);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($valeProvisional);
            $em->flush();
        }

        return $this->redirectToRoute('valeprovisional_index');
    }

    /**
     * Creates a form to delete a valeProvisional entity.
     *
     * @param ValeProvisional $valeProvisional The valeProvisional entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ValeProvisional $valeProvisional)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('valeprovisional_delete', array('id' => $valeProvisional->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
