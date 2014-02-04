<?php

namespace kblog\frontend\UIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HeaderController extends Controller
{
    /**
     * @Route("/ui/header")
     * @Template()
     */
    public function indexAction()
    {
    }

}
