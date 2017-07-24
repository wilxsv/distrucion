<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CtlGrupo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
     * Creates a new ctlGrupo entity.
     *
     */
    public function newAction(Request $request)
    {
        $ctlGrupo = new Ctlgrupo();
        $form = $this->createForm('Minsal\CoreBundle\Form\CtlGrupoType', $ctlGrupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ctlGrupo);
            $em->flush();

            return $this->redirectToRoute('grupos_show', array('id' => $ctlGrupo->getId()));
        }

        return $this->render('ctlgrupo/new.html.twig', array(
            'ctlGrupo' => $ctlGrupo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ctlGrupo entity.
     *
     */
    public function showAction(CtlGrupo $ctlGrupo)
    {
        $deleteForm = $this->createDeleteForm($ctlGrupo);

        return $this->render('ctlgrupo/show.html.twig', array(
            'ctlGrupo' => $ctlGrupo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ctlGrupo entity.
     *
     */
    public function editAction(Request $request, CtlGrupo $ctlGrupo)
    {
        $deleteForm = $this->createDeleteForm($ctlGrupo);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CtlGrupoType', $ctlGrupo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('grupos_edit', array('id' => $ctlGrupo->getId()));
        }

        return $this->render('ctlgrupo/edit.html.twig', array(
            'ctlGrupo' => $ctlGrupo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ctlGrupo entity.
     *
     */
    public function deleteAction(Request $request, CtlGrupo $ctlGrupo)
    {
        $form = $this->createDeleteForm($ctlGrupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ctlGrupo);
            $em->flush();
        }

        return $this->redirectToRoute('grupos_index');
    }

    /**
     * Creates a form to delete a ctlGrupo entity.
     *
     * @param CtlGrupo $ctlGrupo The ctlGrupo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CtlGrupo $ctlGrupo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('grupos_delete', array('id' => $ctlGrupo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
