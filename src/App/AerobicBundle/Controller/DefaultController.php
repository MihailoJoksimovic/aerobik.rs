<?php

namespace App\AerobicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AerobicBundle:Default:index.html.twig', array('name' => $name));
    }
}
