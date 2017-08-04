<?php

namespace KitHelloBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class UsersController extends FOSRestController
{
    public function indexAction()
    {
        return $this->render('KitHelloBundle:Default:index.html.twig');
    }
    
    public function getUsersAction()
    {
        $repo = $this->getDoctrine()->getRepository('KitHelloBundle:Users');
        $list = $repo->findAll();
        $view = $this->view($list, 200)
            ->setTemplate('KitHelloBundle:Users:getUsers.html.twig')
            ->setTemplateVar('users');
        return $this->handleView($view);
    }
    
    public function redirectAction()
    {
        $view = $this->redirectView($this->generateUrl('kit_hello_users_getusers'), 301);
        // or $view = $this->routeRedirectView('kit_hello_users_getusers', 301);
        return $this->handleView($view);
    }
}