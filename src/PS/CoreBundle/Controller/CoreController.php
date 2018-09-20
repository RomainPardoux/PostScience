<?php

namespace PS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
  // La page d'accueil
  public function indexAction()
  {

    return $this->render('PSCoreBundle:Core:index.html.twig');

  }

}
