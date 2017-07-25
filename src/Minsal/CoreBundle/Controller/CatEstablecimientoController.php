<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CatEstablecimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Catestablecimiento controller.
 *
 */
class CatEstablecimientoController extends Controller
{
    /**
     * Lists all catEstablecimiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$catEstablecimientos = $em->getRepository('MinsalCoreBundle:CatEstablecimiento')->findAll();

        //Sentencia sql para traer los establecimientos que tienen establecimientos
        $sql = "select e.id as Establecimiento, e.nombre from cat_establecimiento as e
        inner join trn_establecimientosdistribucion as i on i.id_cat_establecimiento =  e.id
        inner join trn_asignacion as a on a.id = i.trn_asignacionid;";

        $statement = $em->getConnection()->prepare($sql);
        $statement->execute();
        $catEstablecimientos = $statement->fetchAll();

        return $this->render('catestablecimiento/index.html.twig', array(
            'catEstablecimientos' => $catEstablecimientos,
        ));
    }

    /**
     * Creates a new catEstablecimiento entity.
     *
     */
    public function newAction(Request $request)
    {
        $catEstablecimiento = new Catestablecimiento();
        $form = $this->createForm('Minsal\CoreBundle\Form\CatEstablecimientoType', $catEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($catEstablecimiento);
            $em->flush();

            return $this->redirectToRoute('establecimientos_show', array('id' => $catEstablecimiento->getId()));
        }

        return $this->render('catestablecimiento/new.html.twig', array(
            'catEstablecimiento' => $catEstablecimiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a catEstablecimiento entity.
     *
     */
    public function showAction(CatEstablecimiento $catEstablecimiento)
    {
        $deleteForm = $this->createDeleteForm($catEstablecimiento);

        return $this->render('catestablecimiento/show.html.twig', array(
            'catEstablecimiento' => $catEstablecimiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing catEstablecimiento entity.
     *
     */
    public function editAction(Request $request, CatEstablecimiento $catEstablecimiento)
    {
        $deleteForm = $this->createDeleteForm($catEstablecimiento);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CatEstablecimientoType', $catEstablecimiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('establecimientos_edit', array('id' => $catEstablecimiento->getId()));
        }

        return $this->render('catestablecimiento/edit.html.twig', array(
            'catEstablecimiento' => $catEstablecimiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a catEstablecimiento entity.
     *
     */
    public function deleteAction(Request $request, CatEstablecimiento $catEstablecimiento)
    {
        $form = $this->createDeleteForm($catEstablecimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($catEstablecimiento);
            $em->flush();
        }

        return $this->redirectToRoute('establecimientos_index');
    }

    /**
     * Creates a form to delete a catEstablecimiento entity.
     *
     * @param CatEstablecimiento $catEstablecimiento The catEstablecimiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CatEstablecimiento $catEstablecimiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('establecimientos_delete', array('id' => $catEstablecimiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function getProductosAction(CatEstablecimiento $establecimiento, Request $request)
    {
        return 
    }
}
