<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnProductos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Trnproducto controller.
 *
 * @Route("trnproductos")
 */
class TrnProductosController extends Controller
{
    /**
     * Lists all trnProducto entities.
     *
     * @Route("/", name="trnproductos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trnProductos = $em->getRepository('MinsalCoreBundle:TrnProductos')->findAll();

        return $this->render('trnproductos/index.html.twig', array(
            'trnProductos' => $trnProductos,
        ));
    }

    /**
     * Creates a new trnProducto entity.
     *
     * @Route("/new", name="trnproductos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $trnProducto = new Trnproducto();
        $form = $this->createForm('Minsal\CoreBundle\Form\TrnProductosType', $trnProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trnProducto);
            $em->flush();

            return $this->redirectToRoute('trnproductos_show', array('apiProductoid' => $trnProducto->getApiproductoid()));
        }

        return $this->render('trnproductos/new.html.twig', array(
            'trnProducto' => $trnProducto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trnProducto entity.
     *
     * @Route("/{apiProductoid}", name="trnproductos_show")
     * @Method("GET")
     */
    public function showAction(TrnProductos $trnProducto)
    {
        $deleteForm = $this->createDeleteForm($trnProducto);

        return $this->render('trnproductos/show.html.twig', array(
            'trnProducto' => $trnProducto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trnProducto entity.
     *
     * @Route("/{apiProductoid}/edit", name="trnproductos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TrnProductos $trnProducto)
    {
        $deleteForm = $this->createDeleteForm($trnProducto);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnProductosType', $trnProducto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trnproductos_edit', array('apiProductoid' => $trnProducto->getApiproductoid()));
        }

        return $this->render('trnproductos/edit.html.twig', array(
            'trnProducto' => $trnProducto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trnProducto entity.
     *
     * @Route("/{apiProductoid}", name="trnproductos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TrnProductos $trnProducto)
    {
        $form = $this->createDeleteForm($trnProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trnProducto);
            $em->flush();
        }

        return $this->redirectToRoute('trnproductos_index');
    }

    /**
     * Creates a form to delete a trnProducto entity.
     *
     * @param TrnProductos $trnProducto The trnProducto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrnProductos $trnProducto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trnproductos_delete', array('apiProductoid' => $trnProducto->getApiproductoid())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
