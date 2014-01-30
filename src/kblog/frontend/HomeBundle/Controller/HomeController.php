<?php

namespace kblog\frontend\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    /**
     * 
     * @Route("/")
     * @Template("kblogfrontendHomeBundle:Home:index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
}
