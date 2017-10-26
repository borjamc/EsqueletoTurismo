<?php

namespace TurismoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('TurismoBundle:Default:index.html.twig');
    }
    /**
     * @Route("/mostrar")
     */
    public function mostrarAction()
    {
        $repository = $this->getDoctrine()->getRepository('TurismoBundle:Turismo');
        $turismo = $repository->findAll();
        return $this->render('TurismoBundle:Default:mostrar.html.twig',array('turismos' =>$turismo ));
    }
}
