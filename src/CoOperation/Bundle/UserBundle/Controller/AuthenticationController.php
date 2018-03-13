<?php

namespace CoOperation\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthenticationController extends Controller
{
    public function loginAction()
    {
        return $this->render('@CoOperationUser/Authentication/login.html.twig');
    }

}
