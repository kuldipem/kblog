<?php

namespace kblog\CoreBundle\Controller;

use Symfony\Component\DomCrawler\Crawler;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $start=time();
        
        $tmp=file_get_contents("http://www.gamin.impexdirectory.ru");
        
        $c=new Crawler();
        $c->addContent($tmp);
        //$a = (method_exists($html, 'find')) ? $html->find('a[id=SBs' . $domV['DOMAIN_ID'] . 'e3453]') : 0;
        $end=time();
        return $this->render('CoreBundle::index.html.twig', array('name' => $name,'stDate'=>$start,'enDate'=>$end,"data"=>$c->links()));
    }
}
