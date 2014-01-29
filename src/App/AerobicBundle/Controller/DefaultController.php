<?php

namespace App\AerobicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $userService = $this->get('user_service');
        $user = $userService->getLoggedInUser();

        $message = 'Hello bitch (you are not logged in, so you are a bitch).';
        if (isset($user)) {
            $message = 'Hello ' . $user->getUsername();
        }
        return $this->render('AerobicBundle:Default:index.html.twig', array('message' => $message));
    }
}
