<?php

namespace GestionFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionFraisBundle:Default:index.html.twig');
    }
}
