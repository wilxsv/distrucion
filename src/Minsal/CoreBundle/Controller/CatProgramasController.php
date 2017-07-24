<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\CatProgramas;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Catprograma controller.
 *
 */
class CatProgramasController extends Controller
{
    /**
     * Lists all catPrograma entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catProgramas = $em->getRepository('MinsalCoreBundle:CatProgramas')->findAll();

        return $this->render('catprogramas/index.html.twig', array(
            'catProgramas' => $catProgramas,
        ));
    }

    /**
     * Creates a new catPrograma entity.
     *
     */
    public function newAction(Request $request)
    {
        $catPrograma = new Catprograma();
        $form = $this->createForm('Minsal\CoreBundle\Form\CatProgramasType', $catPrograma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($catPrograma);
            $em->flush();

            return $this->redirectToRoute('programas_show', array('id' => $catPrograma->getId()));
        }

        return $this->render('catprogramas/new.html.twig', array(
            'catPrograma' => $catPrograma,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a catPrograma entity.
     *
     */
    public function showAction(CatProgramas $catPrograma)
    {
        $deleteForm = $this->createDeleteForm($catPrograma);

        return $this->render('catprogramas/show.html.twig', array(
            'catPrograma' => $catPrograma,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing catPrograma entity.
     *
     */
    public function editAction(Request $request, CatProgramas $catPrograma)
    {
        $deleteForm = $this->createDeleteForm($catPrograma);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\CatProgramasType', $catPrograma);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('programas_edit', array('id' => $catPrograma->getId()));
        }

        return $this->render('catprogramas/edit.html.twig', array(
            'catPrograma' => $catPrograma,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a catPrograma entity.
     *
     */
    public function deleteAction(Request $request, CatProgramas $catPrograma)
    {
        $form = $this->createDeleteForm($catPrograma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($catPrograma);
            $em->flush();
        }

        return $this->redirectToRoute('programas_index');
    }

    /**
     * Creates a form to delete a catPrograma entity.
     *
     * @param CatProgramas $catPrograma The catPrograma entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CatProgramas $catPrograma)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('programas_delete', array('id' => $catPrograma->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
