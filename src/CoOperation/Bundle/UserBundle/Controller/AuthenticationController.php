<?php

namespace CoOperation\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthenticationController extends Controller
{
    /**
     * @var AuthenticationUtils
     */
    private $authUtils;

    public function __construct(AuthenticationUtils $authUtils)
    {
        $this->authUtils = $authUtils;
    }

    public function loginAction()
    {
        $error = $this->authUtils->getLastAuthenticationError();

        $lastUsername = $this->authUtils->getLastUsername();

        return $this->render('@CoOperationUser/Authentication/login.html.twig', compact('error', 'lastUsername'));
    }

}
