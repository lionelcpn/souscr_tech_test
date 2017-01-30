<?php

namespace LC\Tech_testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SouscritooController extends Controller
{
  public function indexAction()
  {
    $content = $this->get('templating')->render('LCTech_testBundle:Souscritoo:index.html.twig');

    return new Response($content);
  }

  public function viewAction()
  {
    $content = $this->get('templating')->render('LCTech_testBundle:Souscritoo:view.html.twig');

    return new Response($content);
  }
}
