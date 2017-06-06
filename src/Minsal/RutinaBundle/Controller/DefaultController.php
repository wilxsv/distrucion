<?php

namespace Minsal\RutinaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MinsalRutinaBundle:Default:index.html.twig');
    }
}
