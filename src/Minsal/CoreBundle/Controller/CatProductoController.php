<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CatProducto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Catproducto controller.
 *
 */
class CatProductoController extends Controller
{
    /**
     * Lists all catProducto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catProductos = $em->getRepository('MinsalCoreBundle:CatProducto')->findAll();

        return $this->render('catproducto/index.html.twig', array(
            'catProductos' => $catProductos,
        ));
    }

    /**
     * Creates a new catProducto entity.
     *
     */
    public function newAction(Request $request)
    {
        $catProducto = new Catproducto();
        $form = $this->createForm('Minsal\CoreBundle\Form\CatProductoType', $catProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($catProducto);
            $em->flush();

            return $this->redirectToRoute('productos_show', array('id' => $catProducto->getId()));
        }

        return $this->render('catproducto/new.html.twig', array(
            'catProducto' => $catProducto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a catProducto entity.
     *
     */
    public function showAction(CatProducto $catProducto)
    {
        $deleteForm = $this->createDeleteForm($catProducto);

        return $this->render('catproducto/show.html.twig', array(
            'catProducto' => $catProducto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing catProducto entity.
     *
     */
    public function editAction(Request $request, CatProducto $catProducto)
    {
        $deleteForm = $this->createDeleteForm($catProducto);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CatProductoType', $catProducto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('productos_edit', array('id' => $catProducto->getId()));
        }

        return $this->render('catproducto/edit.html.twig', array(
            'catProducto' => $catProducto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a catProducto entity.
     *
     */
    public function deleteAction(Request $request, CatProducto $catProducto)
    {
        $form = $this->createDeleteForm($catProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($catProducto);
            $em->flush();
        }

        return $this->redirectToRoute('productos_index');
    }

    /**
     * Creates a form to delete a catProducto entity.
     *
     * @param CatProducto $catProducto The catProducto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CatProducto $catProducto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('productos_delete', array('id' => $catProducto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
