<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\TrnDistribucion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
* Trndistribucion controller.
*
*/
class TrnDistribucionController extends Controller
{
  /**
  * Lists all trnDistribucion entities.
  *
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
  */
  public function newAction(Request $request)
  {
    $trnDistribucion = new Trndistribucion();
    $form = $this->createForm('Minsal\CoreBundle\Form\TrnDistribucionType', $trnDistribucion);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($trnDistribucion);
      $em->flush();

      return $this->redirectToRoute('trndistribucion_show', array('id' => $trnDistribucion->getId()));
    }

    return $this->render('trndistribucion/new.html.twig', array(
      'trnDistribucion' => $trnDistribucion,
      'form' => $form->createView(),
    ));
  }

  /**
  * Finds and displays a trnDistribucion entity.
  *
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

  /**
  * @Route("/new", name="select_grupos", condition="request.headers.get('X-Requested-With') == 'XMLHttpRequest'")
  */
  public function ajaxAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $suministro_id = $request->request->get('suministro_id');

    $grupo = $em->getRepository('MinsalCoreBundle:CtlGrupo')->findBySuministroId($suministro_id);

    return new JsonResponse($grupo);
  }
  /*
  public function ajaxAction(Request $request)
  {
  echo('<div class="maje!">'.$request->query->get('suministro').'</div>');
  if (! $request->isXmlHttpRequest()) {

  throw new NotFoundHttpException();
}
$em = $this->getDoctrine()->getEntityManager();

if ($request->query->get('suministro') != NULL && is_numeric($request->query->get('suministro')) ){

$result = $em->createQuery("SELECT g.id, g.nombreGrupo FROM MinsalCoreBundle:CtlGrupo g WHERE g.suministro = ".$request->query->get('suministro')." ORDER BY g.nombreGrupo" )->getResult();
return $this->render('trndistribucion/new.twig', array( 'rest'=> TRUE, 'suministro'=> $result));

} elseif ($request->query->get('grupo') != NULL && is_numeric($request->query->get('grupo')) ){

$result = $em->createQuery( "SELECT g.id, g.nombreGrupo FROM MinsalCoreBundle:CtlGrupo g WHERE g.grupo = ".$request->query->get('grupo')." ORDER BY g.nombreGrupo" )->getResult();
return $this->render('trndistribucion/new.html.twig', array( 'rest'=> TRUE, 'grupo'=> $result));

}  elseif ($request->query->get('subgrupo') != NULL && is_numeric($request->query->get('subgrupo')) ){

$result = $em->createQuery( "SELECT g.id, g.nombreLargoInsumo FROM MinsalCoreBundle:CtlInsumo g WHERE g.grupoid = ".$request->query->get('subgrupo')." ORDER BY g.nombreLargoInsumo" )->getResult();
return $this->render('trndistribucion/new.html.twig', array( 'rest'=> TRUE, 'insumo'=> $result));

} else {

return $this->render('trndistribucion/new.html.twig', array( 'rest'=> FALSE ));

}
}*/
}
