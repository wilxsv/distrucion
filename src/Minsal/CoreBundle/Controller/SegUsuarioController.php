<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\SegUsuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Segusuario controller.
 *
 * @Route("segusuario")
 */
class SegUsuarioController extends Controller
{
    /**
     * Lists all segUsuario entities.
     *
     * @Route("/", name="segusuario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $segUsuarios = $em->getRepository('MinsalCoreBundle:SegUsuario')->findAll();

        return $this->render('segusuario/index.html.twig', array(
            'segUsuarios' => $segUsuarios,
        ));
    }

    /**
     * Creates a new segUsuario entity.
     *
     * @Route("/new", name="segusuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $segUsuario = new Segusuario();
        $form = $this->createForm('Minsal\CoreBundle\Form\SegUsuarioType', $segUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($segUsuario);
            $em->flush();

            return $this->redirectToRoute('segusuario_show', array('id' => $segUsuario->getId()));
        }

        return $this->render('segusuario/new.html.twig', array(
            'segUsuario' => $segUsuario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a segUsuario entity.
     *
     * @Route("/{id}", name="segusuario_show")
     * @Method("GET")
     */
    public function showAction(SegUsuario $segUsuario)
    {
        $deleteForm = $this->createDeleteForm($segUsuario);

        return $this->render('segusuario/show.html.twig', array(
            'segUsuario' => $segUsuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing segUsuario entity.
     *
     * @Route("/{id}/edit", name="segusuario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SegUsuario $segUsuario)
    {
        $deleteForm = $this->createDeleteForm($segUsuario);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\SegUsuarioType', $segUsuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('segusuario_edit', array('id' => $segUsuario->getId()));
        }

        return $this->render('segusuario/edit.html.twig', array(
            'segUsuario' => $segUsuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a segUsuario entity.
     *
     * @Route("/{id}", name="segusuario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SegUsuario $segUsuario)
    {
        $form = $this->createDeleteForm($segUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($segUsuario);
            $em->flush();
        }

        return $this->redirectToRoute('segusuario_index');
    }

    /**
     * Creates a form to delete a segUsuario entity.
     *
     * @param SegUsuario $segUsuario The segUsuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SegUsuario $segUsuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('segusuario_delete', array('id' => $segUsuario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
