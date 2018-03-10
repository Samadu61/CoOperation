<?php

namespace CoOperation\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthentificationController extends Controller
{
    public function loginAction()
    {
        return $this->render('@CoOperationUser/Authentification/login.html.twig');
    }

}
