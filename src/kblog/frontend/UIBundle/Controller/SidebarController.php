<?php

namespace kblog\frontend\UIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SidebarController extends Controller
{
    /**
     * @Route("/ui/sidebar")
     * @Template()
     */
    public function indexAction()
    {
    }

}
