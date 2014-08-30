<?php

namespace Project\CompositionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProjectCompositionBundle:Default:index.html.twig', array('name' => $name));
    }
}
