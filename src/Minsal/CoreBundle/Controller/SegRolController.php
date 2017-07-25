<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\SegRol;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Segrol controller.
 *
 */
class SegRolController extends Controller
{
    /**
     * Lists all segRol entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $segRols = $em->getRepository('MinsalCoreBundle:SegRol')->findAll();

        return $this->render('segrol/index.html.twig', array(
            'segRols' => $segRols,
        ));
    }

    /**
     * Creates a new segRol entity.
     *
     */
    public function newAction(Request $request)
    {
        $segRol = new Segrol();
        $form = $this->createForm('Minsal\CoreBundle\Form\SegRolType', $segRol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($segRol);
            $em->flush();

            return $this->redirectToRoute('segrol_show', array('id' => $segRol->getId()));
        }

        return $this->render('segrol/new.html.twig', array(
            'segRol' => $segRol,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a segRol entity.
     *
     */
    public function showAction(SegRol $segRol)
    {
        $deleteForm = $this->createDeleteForm($segRol);

        return $this->render('segrol/show.html.twig', array(
            'segRol' => $segRol,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing segRol entity.
     *
     */
    public function editAction(Request $request, SegRol $segRol)
    {
        $deleteForm = $this->createDeleteForm($segRol);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\SegRolType', $segRol);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('segrol_edit', array('id' => $segRol->getId()));
        }

        return $this->render('segrol/edit.html.twig', array(
            'segRol' => $segRol,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a segRol entity.
     *
     */
    public function deleteAction(Request $request, SegRol $segRol)
    {
        $form = $this->createDeleteForm($segRol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($segRol);
            $em->flush();
        }

        return $this->redirectToRoute('segrol_index');
    }

    /**
     * Creates a form to delete a segRol entity.
     *
     * @param SegRol $segRol The segRol entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SegRol $segRol)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('segrol_delete', array('id' => $segRol->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
