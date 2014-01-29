<?php

namespace App\AerobicBundle\Service;

use Symfony\Component\Security\Core\SecurityContextInterface;
use FOS\UserBundle\Model\UserManager;

class UserService {
    private $securityContext;
    private $loggedUser;
    private $userManager;

    public function __construct(
        SecurityContextInterface $securityContext,
        UserManager $userManager
    ) {
        $this->securityContext = $securityContext;
        $this->userManager = $userManager;
    }

    public function getLoggedInUser() {
        if ($this->loggedUser == null) {
            $tmpUser = $this->securityContext->getToken()->getUser();
            $this->loggedUser = $tmpUser == 'anon.' ? null : $tmpUser;
        }
        return $this->loggedUser;
    }

    public function getUserById($userId)
    {
        $user = $this->userManager->findUserBy(array('id' => $userId));
        if ($user === null) {
//            throw new EntityNotFoundException('user', $userId);
        }

        return $user;
    }
}