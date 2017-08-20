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
          $result = $em->createQuery("SELECT g.id, g.nombreGrupo FROM MinsalCoreBundle:CtlGrupo g WHERE g.grupoId = ".$request->get('grupo')." ORDER BY g.nombreGrupo" )->getResult();
          return $this->render('trnasignacion/ajax.html.twig', array( 'rest'=> TRUE, 'grupo'=> $result));

        } elseif ($request->get('producto') != NULL ){
          if($request->get('opsubgrupo') != NULL && $request->get('opsubgrupo') > 0){
             $param = $request->get('opsubgrupo');
             $url = 'http://192.168.1.13:8080/v1/suministros/?tocken=eccbc87e4b5ce2fe28308fd9f2a7baf3&idGrupo='.$param;
          }
          elseif($request->get('opgrupo') != NULL && $request->get('opgrupo') > 0){
             $param = $request->get('opgrupo');
             $url = 'http://192.168.1.13:8080/v1/suministros/?tocken=eccbc87e4b5ce2fe28308fd9f2a7baf3&idGrupo='.$param;
          }elseif($request->get('opsuministro') != NULL && $request->get('opsuministro') > 0){
             $param = $request->get('opsuministro');
             $url = 'http://192.168.1.13:8080/v1/suministros/?tocken=eccbc87e4b5ce2fe28308fd9f2a7baf3&idTipo='.$param;
          }
          //$result =   $em->createQuery("SELECT p.id, CONCAT(p.codigoSinab, ' - ', p.nombreLargoInsumo) AS nombre FROM MinsalCoreBundle:CatProducto p WHERE p.grupoid = ".$request->get('producto')." ORDER BY p.codigoSinab")->getResult();
          return $this->render('trnasignacion/ajax.html.twig', array( 'rest'=> TRUE,'insumo'=> $this->obtenerProductos($url)));

        } else {
          return $this->render('trndistribucion/ajax.html.twig', array( 'rest'=> FALSE ));
        }
        //return new Response($request->get('suministro'));

      }

      public function obtenerProductos(string $url)
      {
        /*se obtienen los productos*/
        $res = array();
        $service_url = $url;
        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        curl_close($curl);
        $respuesta = json_decode($curl_response,true);

        foreach ($respuesta['respuesta'] as   $key=>$val ) {
          $res[] = array("id" => $val["id"], "nombre" => $val["codigo_sinab"].' - '.$val["nombre_largo_insumo"]);
        }

        return $res;
      }
    }
