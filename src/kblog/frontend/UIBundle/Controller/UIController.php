<?php

namespace kblog\frontend\UIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UIController extends Controller
{  
    /**
     * @Route("/ui")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('UIBundle:UI:index.html.twig',array());
    }
    
}
