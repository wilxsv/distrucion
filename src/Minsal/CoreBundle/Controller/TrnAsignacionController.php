<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnAsignacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Trnasignacion controller.
 *
 */
class TrnAsignacionController extends Controller
{
    /**
     * Lists all trnAsignacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trnAsignacions = $em->getRepository('MinsalCoreBundle:TrnAsignacion')->findAll();

        return $this->render('trnasignacion/index.html.twig', array(
            'trnAsignacions' => $trnAsignacions,
        ));
    }

    /**
     * Creates a new trnAsignacion entity.
     *
     */
    public function newAction(Request $request)
    {
        $trnAsignacion = new Trnasignacion();
        $form = $this->createForm('Minsal\CoreBundle\Form\TrnAsignacionType', $trnAsignacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trnAsignacion);
            $em->flush();

            return $this->redirectToRoute('asingaciones_show', array('id' => $trnAsignacion->getId()));
        }

        return $this->render('trnasignacion/new.html.twig', array(
            'trnAsignacion' => $trnAsignacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trnAsignacion entity.
     *
     */
    public function showAction(TrnAsignacion $trnAsignacion)
    {
        $deleteForm = $this->createDeleteForm($trnAsignacion);

        return $this->render('trnasignacion/show.html.twig', array(
            'trnAsignacion' => $trnAsignacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing trnAsignacion entity.
     *
     */
    public function editAction(Request $request, TrnAsignacion $trnAsignacion)
    {
        $deleteForm = $this->createDeleteForm($trnAsignacion);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnAsignacionType', $trnAsignacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('asingaciones_edit', array('id' => $trnAsignacion->getId()));
        }

        return $this->render('trnasignacion/edit.html.twig', array(
            'trnAsignacion' => $trnAsignacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a trnAsignacion entity.
     *
     */
    public function deleteAction(Request $request, TrnAsignacion $trnAsignacion)
    {
        $form = $this->createDeleteForm($trnAsignacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trnAsignacion);
            $em->flush();
        }

        return $this->redirectToRoute('asingaciones_index');
    }

    /**
     * Creates a form to delete a trnAsignacion entity.
     *
     * @param TrnAsignacion $trnAsignacion The trnAsignacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TrnAsignacion $trnAsignacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('asingaciones_delete', array('id' => $trnAsignacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function mostrarProductosAction(TrnAsignacion $trnAsignacion, Request $request){

      $session = $request->getSession();

      /*
       * Aqui recibimos el id de la asignacion, mejor aun: Symfony hace el
       * casting agregandole el parametro: TrnAsignacion $trnAsignacion
       */
      $descripcion = $trnAsignacion->getDescripcion();
      //Obteniendo el entity manager
      $em = $this->getDoctrine()->getManager();
      //Sentencia pura SQL
      $sql = "select p.id, p.nombre_largo_insumo, t.verificar, t.id_trn_validacion, t.cantidad_sugerida, t.id as idDetalle, a.id as idAsignacion from cat_producto as p
              inner join distribucion_producto as d on p.id = d.cat_productoid
              inner join trn_asignacion as a on d.trn_asignacionid = a.id
              inner join trn_detalle as t on d.trn_detalleid = t.id
              where a.id = ".$trnAsignacion->getId()."
            ";
      $em = $this->getDoctrine()->getManager();
      $stmt = $em->getConnection()->prepare($sql);
      $stmt->execute();
      $productos = $stmt->fetchAll();
      $session->set('idAsignacion', $trnAsignacion->getId());
      //return var_dump($stmt->fetchAll());
      return $this->render('trnasignacion/productos.html.twig',array(
        'descripcion' => $descripcion,
        'productos' => $productos
      ));
    }

    public function verificarAsignacionAction(TrnAsignacion $asignacion){
      $estado = $this->getDoctrine()->getRepository('MinsalCoreBundle:CatEstados')
                ->findOneBy(
                  array('estado' => 'VERIFICADO')
                );
      $asignacion->setCatEstadosid($estado);
      $em = $this->getDoctrine()->getManager();
      $em->persist($asignacion);
      $em->flush();

      return $this->redirect($this->generateUrl('asingaciones_index'));
    }
}
