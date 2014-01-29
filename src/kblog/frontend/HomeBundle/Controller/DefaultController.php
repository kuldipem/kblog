<?php

namespace kblog\frontend\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('kblogfrontendHomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
