<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnProductoslote;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Trnproductoslote controller.
 *
 * @Route("trnproductoslote")
 */
class TrnProductosloteController extends Controller
{
    /**
     * Lists all trnProductoslote entities.
     *
     * @Route("/", name="trnproductoslote_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trnProductoslotes = $em->getRepository('MinsalCoreBundle:TrnProductoslote')->findAll();

        return $this->render('trnproductoslote/index.html.twig', array(
            'trnProductoslotes' => $trnProductoslotes,
        ));
    }

    /**
     * Creates a new trnProductoslote entity.
     *
     * @Route("/new", name="trnproductoslote_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $trnProductoslote = new Trnproductoslote();
        $form = $this->createForm('Minsal\CoreBundle\Form\TrnProductosloteType', $trnProductoslote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trnProductoslote);
            $em->flush();

            return $this->redirectToRoute('trnproductoslote_show', array('apiLoteid' => $trnProductoslote->getApiloteid()));
        }

        return $this->render('trnproductoslote/new.html.twig', array(
            'trnProductoslote' => $trnProductoslote,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trnProductoslote entity.
     *
     * @Route("/{apiLoteid}", name="trnproductoslote_show")
     * @Method("GET")
     */
    public function showAction(TrnProductoslote $trnProductoslote)
    {
        $deleteForm = $this->createDeleteForm($trnProductoslote);

        return $this->render('trnproductoslote/show.html.twig', array(
            'trnProductoslote' => $trnProductoslote,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trnProductoslote entity.
     *
     * @Route("/{apiLoteid}/edit", name="trnproductoslote_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TrnProductoslote $trnProductoslote)
    {
        $deleteForm = $this->createDeleteForm($trnProductoslote);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnProductosloteType', $trnProductoslote);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trnproductoslote_edit', array('apiLoteid' => $trnProductoslote->getApiloteid()));
        }

        return $this->render('trnproductoslote/edit.html.twig', array(
            'trnProductoslote' => $trnProductoslote,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trnProductoslote entity.
     *
     * @Route("/{apiLoteid}", name="trnproductoslote_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TrnProductoslote $trnProductoslote)
    {
        $form = $this->createDeleteForm($trnProductoslote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trnProductoslote);
            $em->flush();
        }

        return $this->redirectToRoute('trnproductoslote_index');
    }

    /**
     * Creates a form to delete a trnProductoslote entity.
     *
     * @param TrnProductoslote $trnProductoslote The trnProductoslote entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrnProductoslote $trnProductoslote)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trnproductoslote_delete', array('apiLoteid' => $trnProductoslote->getApiloteid())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
