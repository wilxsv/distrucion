<?php

namespace Minsal\CoreBundle\Controller;

use Minsal\CoreBundle\Entity\ValeProvisional;
use Minsal\CoreBundle\Entity\CatEstablecimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Minsal\CoreBundle\Entity\CatProducto;
use Symfony\Component\Validator\Constraints\Date;

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
        $sql = "select distinct e.id as Establecimiento, e.nombre, a.prioridad from cat_establecimiento as e
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

    /**
    *Returns the list of Products asociated
    *
    *@param CatEstablecimiento $establecimiento The entity for the query
    *
    *@return the view for the user to see the prodcuts form a specific institution
    */
    public function getProductosAction(CatEstablecimiento $establecimiento, Request $request)
    {
        $session = $request->getSession();
        $nombreEstablecimiento = $establecimiento->getNombre();
        $em = $this->getDoctrine()->getManager();
        $productoActual = $session->get('productoActual');
        if ($productoActual == null){
          $id = 0;
        }
        else{
          $id = $productoActual->getId();
        }
        $total = 0.00;
        if (isset($_GET["total"]))
        {
          $total = $_GET["total"];
        }
        // Query to get the products for a specific institution
        $sql = "select foo.id, foo.codigo_sinab, foo.nombre_largo_insumo, foo.unidad_medida, foo.cantidadasignada, sum(foo.existencia)
                from (select distinct fo.id, fo.api_loteid, fo.codigo_sinab, fo.nombre_largo_insumo, fo.unidad_medida, fo.existencia, fo.cantidadasignada
                from (select p.id, pl.api_loteid, p.codigo_sinab, p.nombre_largo_insumo, p.unidad_medida, pl.existencia, sum(d.cantidad_distribuir) as cantidadasignada
                from cat_establecimiento as e inner join trn_establecimientosdistribucion as i
                on i.id_cat_establecimiento =  e.id inner join trn_asignacion as a
                on a.id = i.trn_asignacionid inner join distribucion_producto as dp
                on dp.trn_asignacionid = a.id inner join cat_producto as p
                on p.id = dp.cat_productoid inner join trn_detalle as d
                on d.cat_productoid = dp.cat_productoid and d.trn_asignacionid = dp.trn_asignacionid inner join trn_productoslote as pl
                on pl.cat_productoid = p.id
                where e.id = ".$establecimiento->getId()."
                group by (p.id, pl.api_loteid, p.codigo_sinab, p.nombre_largo_insumo, p.unidad_medida)) as fo
                order by fo.api_loteid) as foo
                group by (foo.id, foo.codigo_sinab, foo.nombre_largo_insumo, foo.unidad_medida, foo.cantidadasignada);
                ";
        $statement = $em->getConnection()->prepare($sql);
        $statement->execute();

        //Variables de sesion...
        $productos = $statement->fetchAll();

        $session->set('productosSesion', $productos );
        $session->set('establecimientoSesion', $establecimiento);
        return $this->render('catestablecimiento/productos.html.twig', array(
          'productos' => $productos,
          'establecimiento' => $nombreEstablecimiento,
          'id' => $id,
          'total' => $total
        )

      );
    }

    public function productoAsignacionesAction(CatProducto $catProducto, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $sql = "select a.fecha_creacion, a.id, a.descripcion, d.cantidad_distribuir from trn_detalle d inner join distribucion_producto dp
        on d.trn_asignacionid = dp.trn_asignacionid and d.cat_productoid = dp.cat_productoid
        inner join trn_asignacion a on dp.trn_asignacionid = a.id
        inner join cat_producto p on dp.cat_productoid = p.id and d.cat_productoid = ".$catProducto->getId()."
        order by a.fecha_creacion ASC;";
        $em = $this->getDoctrine()->getManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $Asignacions = $stmt->fetchAll();
        $session = $request->getSession();
        $productos = $session->get('productosSesion');
        $session->set('productoActual', $catProducto);
        $establecimientoActual = $session->get('establecimientoSesion');
        foreach ($productos as $producto){
          if ($producto["id"] == $catProducto->getId())
          {
            $total = $producto["cantidadasignada"];
          }
        }
        return $this->render('catestablecimiento/asignacionesProducto.html.twig', array(
            'asignaciones' => $Asignacions,
            'total' => $total,
            'establecimiento' => $establecimientoActual
        ));
    }

    public function valeAction(Request $request){
      $productos = $request->get('products');
      $cantidades = $request->get('cantidades');
      if ($productos == null) {
        $this->addFlash('error', 'No seleciono ningun producto');
        return $this->redirectToRoute('establecimientos_productos', array('id' => $request->getSession()->get('establecimientoSesion')->getId()));
      } else {
        $em = $this->getDoctrine()->getManager();
        $vale = new ValeProvisional();
        foreach ($productos as $p) {
          //$productos1[] = $em->getRepository('MinsalCoreBundle:CatProducto')->find($p);
          $vale->addCatProductoid($em->getRepository('MinsalCoreBundle:CatProducto')->find($p));
        }
        $vale->setSegUsuarioid($em->getRepository('MinsalCoreBundle:SegUsuario')->find(1));
        $vale->setFechaCreacion(new \DateTime("now"));
        $em->persist($vale);
        $em->flush();
        return $this->render("catestablecimiento/vale.html.twig",array(
          'vale' => $vale,
          'cantidades' => $cantidades
        ));
      }
    }
}
