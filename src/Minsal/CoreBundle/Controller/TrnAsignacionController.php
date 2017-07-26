<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnAsignacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Trnasignacion controller.
 *
 * @Route("asignaciones")
 */
class TrnAsignacionController extends Controller
{
    /**
     * Lists all trnAsignacion entities.
     *
     * @Route("/", name="asignaciones_index")
     * @Method("GET")
     */
     public function indexAction()
     {
         $em = $this->getDoctrine()->getManager();

         //$trnAsignacions = $em->getRepository('MinsalCoreBundle:TrnAsignacion')->findAll();
         //$
         $sql = "select a.id, a.descripcion, a.fechadistribucion, a.prioridad, est.estado from trn_asignacion a
         inner join trn_establecimientosdistribucion ed on ed.trn_asignacionid = a.id
         inner join cat_establecimiento e on e.id = ed.id_cat_establecimiento
         inner join cat_estados est on est.id = a.cat_estadosid where e.id = 1142";
         $em = $this->getDoctrine()->getManager();
         $stmt = $em->getConnection()->prepare($sql);
         $stmt->execute();
         $trnAsignacions = $stmt->fetchAll();
         //return $trnAsignacions;
         return $this->render('trnasignacion/index.html.twig', array(
             'trnAsignacions' => $trnAsignacions,
         ));
     }

    /**
     * Creates a new trnAsignacion entity.
     *
     * @Route("/new", name="asignaciones_new")
     * @Method({"GET", "POST"})
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

            return $this->redirectToRoute('asignaciones_show', array('id' => $trnAsignacion->getId()));
        }

        return $this->render('trnasignacion/new.html.twig', array(
            'trnAsignacion' => $trnAsignacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trnAsignacion entity.
     *
     * @Route("/{id}", name="asignaciones_show")
     * @Method("GET")
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
     * @Route("/{id}/edit", name="asignaciones_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TrnAsignacion $trnAsignacion)
    {
        $deleteForm = $this->createDeleteForm($trnAsignacion);
        $editForm = $this->createForm('Minsal\CoreBundle\Form\TrnAsignacionType', $trnAsignacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('asignaciones_edit', array('id' => $trnAsignacion->getId()));
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
     * @Route("/{id}", name="asignaciones_delete")
     * @Method("DELETE")
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

        return $this->redirectToRoute('asignaciones_index');
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
            ->setAction($this->generateUrl('asignaciones_delete', array('id' => $trnAsignacion->getId())))
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
      $sql = "select p.id, dp.trn_asignacionid , p.nombre_largo_insumo, d.verificar, d.id as detalle_id,
              d.cantidad_sugerida, d.id_trn_validacion
              from cat_producto as p
              inner join distribucion_producto as dp on dp.cat_productoid = p.id
              right join trn_detalle as d on p.id = d.cat_productoid and dp.trn_asignacionid = d.trn_asignacionid
              where dp.trn_asignacionid = ".$trnAsignacion->getId()."";
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
