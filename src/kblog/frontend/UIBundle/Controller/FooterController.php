<?php

namespace kblog\frontend\UIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FooterController extends Controller
{
    /**
     * @Route("/ui/footer")
     * @Template()
     */
    public function indexAction()
    {
    }

}
