<?php

namespace power\genBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('powergenBundle:Default:index.html.twig', array('name' => $name));
    }
}
