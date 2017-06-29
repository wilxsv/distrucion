<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnDistribucion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Trndistribucion controller.
 *
 * @Route("trndistribucion")
 */
class TrnDistribucionController extends Controller
{
    /**
     * Lists all trnDistribucion entities.
     *
     * @Route("/", name="trndistribucion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trnDistribucions = $em->getRepository('MinsalCoreBundle:TrnDistribucion')->findAll();

        return $this->render('trndistribucion/index.html.twig', array(
            'trnDistribucions' => $trnDistribucions,
        ));
    }

    /**
     * Creates a new trnDistribucion entity.
     *
     * @Route("/new", name="trndistribucion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $trnDistribucion = new Trndistribucion();
        $form = $this->createForm('Minsal\CoreBundle\Form\TrnDistribucionType', $trnDistribucion);
        $form->handleRequest($request);
        
        $url = "http://192.168.1.10:8080/v1/info/servicios";
        $data = array('tocken' => 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'maestro' => 'establecimiento');
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $json = file_get_contents($url, false, $context);        
        $result = $serializer->deserialize($result,true);
        //todo.

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trnDistribucion);
            $em->flush();

            return $this->redirectToRoute('trndistribucion_show', array('id' => $trnDistribucion->getId()));
        }

        return $this->render('trndistribucion/new.html.twig', array(
            'trnDistribucion' => $trnDistribucion,
            'arrSuministros' => $result,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trnDistribucion entity.
     *
     * @Route("/{id}", name="trndistribucion_show")
     * @Method("GET")
     */
    public function showAction(TrnDistribucion $trnDistribucion)
    {
        $deleteForm = $this->createDeleteForm($trnDistribucion);

        return $this->render('trndistribucion/show.html.twig', array(
            'trnDistribucion' => $trnDistribucion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trnDistribucion entity.
     *
     * @Route("/{id}/edit", name="trndistribucion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TrnDistribucion $trnDistribucion)
    {
        $deleteForm = $this->createDeleteForm($trnDistribucion);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnDistribucionType', $trnDistribucion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trndistribucion_edit', array('id' => $trnDistribucion->getId()));
        }

        return $this->render('trndistribucion/edit.html.twig', array(
            'trnDistribucion' => $trnDistribucion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trnDistribucion entity.
     *
     * @Route("/{id}", name="trndistribucion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TrnDistribucion $trnDistribucion)
    {
        $form = $this->createDeleteForm($trnDistribucion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trnDistribucion);
            $em->flush();
        }

        return $this->redirectToRoute('trndistribucion_index');
    }

    /**
     * Creates a form to delete a trnDistribucion entity.
     *
     * @param TrnDistribucion $trnDistribucion The trnDistribucion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrnDistribucion $trnDistribucion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trndistribucion_delete', array('id' => $trnDistribucion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
