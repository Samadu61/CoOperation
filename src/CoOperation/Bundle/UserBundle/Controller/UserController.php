<?php

namespace CoOperation\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction(): Response
    {
        return $this->render("@CoOperationUser/User/index.html.twig");
    }

    public function createAction(): Response
    {

    }

    public function  updateAction(): Response
    {

    }

    public function deleteAction(): Response
    {
        return $this->redirectToRoute('user_index');
    }
}
