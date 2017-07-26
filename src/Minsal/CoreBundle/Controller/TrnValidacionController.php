<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnValidacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Minsal\CoreBundle\Entity\TrnDetalle;
use Minsal\CoreBundle\Entity\TrnAsignacion;

/**
 * Trnvalidacion controller.
 *
 */
class TrnValidacionController extends Controller
{
    /**
     * Lists all trnValidacion entities.
     *
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
     */
    public function newAction($id, Request $request)
    {
        $session = $request->getSession();
        $trnValidacion = new Trnvalidacion();
        $form = $this->createForm('Minsal\CoreBundle\Form\TrnValidacionType', $trnValidacion);
        $form->handleRequest($request);
        $idPasado = $session->get('idAsignacion');
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $trnValidacion->setFechaModificacion(new \DateTime());
            $trnValidacion->setEstadoVerificado(true);

            //$detalle->setFechaModificacion(new \DateTime());
            //$detalle->setVerificar(true);

            //$trnValidacion->setSegUsuarioid(); agregar cuando se tenga autenticacion
            //$em = $this->getDoctrine()->getManager();
            //$detalle->setIdTrnValidacion($trnValidacion);


            $idPasado = $session->get('idAsignacion');
            $em->persist($trnValidacion);
            $em->flush();
            
            $fecha = new \DateTime();
            $sql = "UPDATE trn_detalle SET verificar=true, fecha_modificacion=:fecha,
            id_trn_validacion=".$trnValidacion->getId()." where
            trn_detalle.id=".$id."";
            //$em = $this->getDoctrine()->getManager();
            $stmt = $em->getConnection()->prepare($sql);
            $fecha = $fecha->format('d/m/Y');
            $stmt->execute(array('fecha'=>$fecha));

            return $this->redirectToRoute('asignaciones_productos', array('id' => $idPasado));
        }

        $sql = "select cantidad_sugerida, existencia_almacenes, cpm from public.trn_detalle
                WHERE trn_detalle.id=2";

        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $detalle = $stmt->fetchAll();

        return $this->render('trnvalidacion/new.html.twig', array(
            'trnValidacion' => $trnValidacion,
            'detalle' => $detalle[0],
            'form' => $form->createView(),
            'idpasado' => $idPasado,
        ));
        //minsal_corebundle_trnvalidacion_cantidadPrelimimar
    }

    /**
     * Finds and displays a trnValidacion entity.
     *
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
     */
    public function editAction(Request $request, TrnValidacion $trnValidacion)
    {
        $deleteForm = $this->createDeleteForm($trnValidacion);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnValidacionType', $trnValidacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('validaciones_edit', array('id' => $trnValidacion->getId()));
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

        return $this->redirectToRoute('validaciones_index');
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
            ->setAction($this->generateUrl('validaciones_delete', array('id' => $trnValidacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
