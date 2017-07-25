<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CatEstados;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Catestado controller.
 *
 */
class CatEstadosController extends Controller
{
    /**
     * Lists all catEstado entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catEstados = $em->getRepository('MinsalCoreBundle:CatEstados')->findAll();

        return $this->render('catestados/index.html.twig', array(
            'catEstados' => $catEstados,
        ));
    }

    /**
     * Creates a new catEstado entity.
     *
     */
    public function newAction(Request $request)
    {
        $catEstado = new Catestado();
        $form = $this->createForm('Minsal\CoreBundle\Form\CatEstadosType', $catEstado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($catEstado);
            $em->flush();

            return $this->redirectToRoute('catestados_show', array('id' => $catEstado->getId()));
        }

        return $this->render('catestados/new.html.twig', array(
            'catEstado' => $catEstado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a catEstado entity.
     *
     */
    public function showAction(CatEstados $catEstado)
    {
        $deleteForm = $this->createDeleteForm($catEstado);

        return $this->render('catestados/show.html.twig', array(
            'catEstado' => $catEstado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing catEstado entity.
     *
     */
    public function editAction(Request $request, CatEstados $catEstado)
    {
        $deleteForm = $this->createDeleteForm($catEstado);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CatEstadosType', $catEstado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('catestados_edit', array('id' => $catEstado->getId()));
        }

        return $this->render('catestados/edit.html.twig', array(
            'catEstado' => $catEstado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a catEstado entity.
     *
     */
    public function deleteAction(Request $request, CatEstados $catEstado)
    {
        $form = $this->createDeleteForm($catEstado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($catEstado);
            $em->flush();
        }

        return $this->redirectToRoute('catestados_index');
    }

    /**
     * Creates a form to delete a catEstado entity.
     *
     * @param CatEstados $catEstado The catEstado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CatEstados $catEstado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('catestados_delete', array('id' => $catEstado->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
