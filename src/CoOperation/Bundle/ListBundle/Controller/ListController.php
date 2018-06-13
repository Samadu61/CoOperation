<?php

namespace CoOperation\Bundle\ListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ListController extends Controller
{
    public function indexAction(): Response
    {
        return $this->render('@CoOperationList/List/index.html.twig');
    }
}
