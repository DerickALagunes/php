<?php

namespace Liverpool\tiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LiverpooltiendaBundle:Default:index.html.twig');
    }
}
