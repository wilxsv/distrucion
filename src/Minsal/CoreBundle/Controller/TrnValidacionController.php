<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnValidacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Trnvalidacion controller.
 *
 * @Route("trnvalidacion")
 */
class TrnValidacionController extends Controller
{
    /**
     * Lists all trnValidacion entities.
     *
     * @Route("/", name="trnvalidacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trnValidacions = $em->getRepository('MinsalCoreBundle:TrnValidacion')->findAll();

        return $this->render('trnvalidacion/index.html.twig', array(
            'trnValidacions' => $trnValidacions,
        ));
    }

    /**
     * Creates a new trnValidacion entity.
     *
     * @Route("/new", name="trnvalidacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $trnValidacion = new Trnvalidacion();
        $form = $this->createForm('Minsal\CoreBundle\Form\TrnValidacionType', $trnValidacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trnValidacion);
            $em->flush();

            return $this->redirectToRoute('trnvalidacion_show', array('id' => $trnValidacion->getId()));
        }

        return $this->render('trnvalidacion/new.html.twig', array(
            'trnValidacion' => $trnValidacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trnValidacion entity.
     *
     * @Route("/{id}", name="trnvalidacion_show")
     * @Method("GET")
     */
    public function showAction(TrnValidacion $trnValidacion)
    {
        $deleteForm = $this->createDeleteForm($trnValidacion);

        return $this->render('trnvalidacion/show.html.twig', array(
            'trnValidacion' => $trnValidacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trnValidacion entity.
     *
     * @Route("/{id}/edit", name="trnvalidacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TrnValidacion $trnValidacion)
    {
        $deleteForm = $this->createDeleteForm($trnValidacion);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnValidacionType', $trnValidacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trnvalidacion_edit', array('id' => $trnValidacion->getId()));
        }

        return $this->render('trnvalidacion/edit.html.twig', array(
            'trnValidacion' => $trnValidacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trnValidacion entity.
     *
     * @Route("/{id}", name="trnvalidacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TrnValidacion $trnValidacion)
    {
        $form = $this->createDeleteForm($trnValidacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trnValidacion);
            $em->flush();
        }

        return $this->redirectToRoute('trnvalidacion_index');
    }

    /**
     * Creates a form to delete a trnValidacion entity.
     *
     * @param TrnValidacion $trnValidacion The trnValidacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrnValidacion $trnValidacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trnvalidacion_delete', array('id' => $trnValidacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
