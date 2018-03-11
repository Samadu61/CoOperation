<?php

namespace CoOperation\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function indexAction(Request $request)
    {
        $content = 'Hello World';
        return $this->render('@CoOperationCore/Home/index.html.twig', compact('content'));
    }
}