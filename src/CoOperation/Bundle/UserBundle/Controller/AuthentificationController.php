<?php

namespace CoOperation\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthentificationController extends Controller
{
    public function loginAction()
    {
        return $this->render('CoOperationUserBundle:Authentification:login.html.twig');
    }

}
