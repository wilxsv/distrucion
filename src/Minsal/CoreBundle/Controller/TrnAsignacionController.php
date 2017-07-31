<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnAsignacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



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

      return $this->redirectToRoute('trnasignacion_show', array('id' => $trnAsignacion->getId()));
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

      return $this->redirectToRoute('trnasignacion_edit', array('id' => $trnAsignacion->getId()));
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

    return $this->redirectToRoute('trnasignacion_index');
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
    ->setAction($this->generateUrl('trnasignacion_delete', array('id' => $trnAsignacion->getId())))
    ->setMethod('DELETE')
    ->getForm()
    ;
  }

  public function ajaxAction(Request $request)
  {
    if (! $request->isXmlHttpRequest()) {
      throw new NotFoundHttpException();
    }

    $em = $this->getDoctrine()->getEntityManager();

    if($request->get('porsuministro')!=NULL  && $request->get('porsuministro') == 'true'){
      $result = $em->createQuery(
        "SELECT s.id, s.nombreSuministro FROM MinsalCoreBundle:CatSuministro s ORDER BY s.nombreSuministro"
        )->getResult();
        return $this->render('trnasignacion/ajax.html.twig', array( 'rest'=> TRUE, 'tiposuministro'=> $result));
      }
      elseif($request->get('porsuministro')!=NULL  && $request->get('porsuministro') == 'false'){
        $result = $em->createQuery(
          "SELECT p.id, p.nombre FROM MinsalCoreBundle:CatProgramas p ORDER BY p.nombre"
          )->getResult();
          return $this->render('trnasignacion/ajax.html.twig', array( 'rest'=> TRUE, 'programa'=> $result));
        }

        elseif ($request->get('suministro') != NULL && is_numeric($request->get('suministro')) ){
          $result = $em->createQuery( "SELECT g.id, g.nombreGrupo FROM MinsalCoreBundle:CtlGrupo g WHERE g.catSuministroid = ".$request->get('suministro')." ORDER BY g.nombreGrupo" )->getResult();
          return $this->render('trnasignacion/ajax.html.twig', array( 'rest'=> TRUE, 'suministro'=> $result));

        } elseif ($request->get('grupo') != NULL && is_numeric($request->get('grupo')) ){

          $result = $em->createQuery(
            "SELECT g.id, g.nombreGrupo FROM MinsalCoreBundle:CtlGrupo g WHERE g.grupoId = ".$request->get('grupo')." ORDER BY g.nombreGrupo" )->getResult();
            return $this->render('trnasignacion/ajax.html.twig', array( 'rest'=> TRUE, 'grupo'=> $result, 'insumo'=>$this->obtenerProductos($request->get('grupo'))));

          }  elseif ($request->get('subgrupo') != NULL && is_numeric($request->get('subgrupo')) ){
            $result = $em->createQuery( "SELECT g.id, g.nombreLargoInsumo FROM MinsalCoreBundle:CtlInsumo g WHERE g.grupoid = ".$request->query->get('subgrupo')." ORDER BY g.nombreLargoInsumo" )->getResult();
            return $this->render('trnasignacion/ajax.html.twig', array( 'rest'=> TRUE, 'insumo'=> $result));

          }  elseif ($request->get('cuadro') != NULL && is_numeric($request->get('cuadro')) ){
            $result = $em->createQuery( "SELECT i.nombreLargoInsumo FROM MinsalCoreBundle:CtlInsumo i JOIN i.ctlEstablecimientoid e JOIN e.idTipoEstablecimiento t WHERE t.id = ".$request->get('cuadro')." GROUP BY i.nombreLargoInsumo ORDER BY i.nombreLargoInsumo " )->getResult();
            $result2 = $em->createQuery( "SELECT e FROM MinsalCoreBundle:CtlEstablecimiento e WHERE e.idTipoEstablecimiento = ".$request->get('cuadro')." ORDER BY e.idMunicipio, e.nombre " )->getResult();
            return $this->render('trnasignacion/ajax.html.twig', array( 'rest'=> FALSE, 'cuadro'=> $result, 'establecimiento'=> $result2));

          } else {
            return $this->render('trndistribucion/ajax.html.twig', array( 'rest'=> FALSE ));
          }
          //return new Response($request->get('suministro'));

        }

        public function obtenerProductos(int $grupo)
        {
          /*se obtienen los productos*/
          $res = array();
          $service_url = 'http://192.168.1.4:8080/v1/suministros/?tocken=eccbc87e4b5ce2fe28308fd9f2a7baf3&idgrupo={$grupo}';
          $curl = curl_init($service_url);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          $curl_response = curl_exec($curl);
          curl_close($curl);
          $respuesta = json_decode($curl_response,true);

          foreach ($respuesta['respuesta'] as $productos ) {
            $res = array("id" => $productos["id"], "nombreLargoInsumo" => $productos["nombre_largo_insumo"]);
          }

          return $res;
        }
      }
