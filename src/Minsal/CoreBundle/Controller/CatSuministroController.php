<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CatSuministro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Catsuministro controller.
 *
 */
class CatSuministroController extends Controller
{
    /**
     * Lists all catSuministro entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catSuministros = $em->getRepository('MinsalCoreBundle:CatSuministro')->findAll();

        return $this->render('catsuministro/index.html.twig', array(
            'catSuministros' => $catSuministros,
        ));
    }

    /**
     * Creates a new catSuministro entity.
     *
     */
    public function newAction(Request $request)
    {
        $catSuministro = new Catsuministro();
        $form = $this->createForm('Minsal\CoreBundle\Form\CatSuministroType', $catSuministro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($catSuministro);
            $em->flush();

            return $this->redirectToRoute('suministros_show', array('id' => $catSuministro->getId()));
        }

        return $this->render('catsuministro/new.html.twig', array(
            'catSuministro' => $catSuministro,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a catSuministro entity.
     *
     */
    public function showAction(CatSuministro $catSuministro)
    {
        $deleteForm = $this->createDeleteForm($catSuministro);

        return $this->render('catsuministro/show.html.twig', array(
            'catSuministro' => $catSuministro,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing catSuministro entity.
     *
     */
    public function editAction(Request $request, CatSuministro $catSuministro)
    {
        $deleteForm = $this->createDeleteForm($catSuministro);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CatSuministroType', $catSuministro);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('suministros_edit', array('id' => $catSuministro->getId()));
        }

        return $this->render('catsuministro/edit.html.twig', array(
            'catSuministro' => $catSuministro,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a catSuministro entity.
     *
     */
    public function deleteAction(Request $request, CatSuministro $catSuministro)
    {
        $form = $this->createDeleteForm($catSuministro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($catSuministro);
            $em->flush();
        }

        return $this->redirectToRoute('suministros_index');
    }

    /**
     * Creates a form to delete a catSuministro entity.
     *
     * @param CatSuministro $catSuministro The catSuministro entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CatSuministro $catSuministro)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('suministros_delete', array('id' => $catSuministro->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
