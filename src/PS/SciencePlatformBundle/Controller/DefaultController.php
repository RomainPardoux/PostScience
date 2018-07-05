<?php

namespace PS\SciencePlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PSSciencePlatformBundle:Default:index.html.twig');
    }
}
