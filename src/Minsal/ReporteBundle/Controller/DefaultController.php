<?php

namespace Minsal\ReporteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MinsalReporteBundle:Default:index.html.twig');
    }
}
