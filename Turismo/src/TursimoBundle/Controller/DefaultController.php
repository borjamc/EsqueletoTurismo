<?php

namespace TursimoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TursimoBundle:Default:index.html.twig');
    }
}
