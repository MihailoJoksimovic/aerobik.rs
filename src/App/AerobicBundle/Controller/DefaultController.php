<?php

namespace App\AerobicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $userService = $this->get('user_service');
        $user = $userService->getLoggedInUser();

        $message = 'Welcome to aerobic';
        if (isset($user)) {
            $message .= ', ' . $user->getUsername();
        }
        return $this->render('AerobicBundle:Default:index.html.twig', array('message' => $message));
    }
}
