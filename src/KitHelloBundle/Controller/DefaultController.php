<?php

namespace KitHelloBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class DefaultController extends FOSRestController
{
    public function indexAction()
    {
        return $this->render('KitHelloBundle:Default:index.html.twig');
    }
}
