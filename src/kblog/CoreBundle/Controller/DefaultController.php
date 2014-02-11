<?php

namespace kblog\CoreBundle\Controller;

use Symfony\Component\DomCrawler\Crawler;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $start=time();
        
        $tmp=file_get_contents("http://atidb.impexdirectory.com/lm_test_2.php");
        
        $c=new Crawler();
        $c->addContent($tmp);
        $c->filter('a[id="SBs1311e3453"]')->each(function ($node, $i) {  echo $node->text(); });
       
//        $tmp=$c->extract("#SBs2e3453");
        
      //  $a = (method_exists($html, 'find')) ? $html->find('a[id=SBs' . $domV['DOMAIN_ID'] . 'e3453]') : 0;
        $end=time();
        return $this->render('CoreBundle::index.html.twig', array('name' => $name,'stDate'=>$start,'enDate'=>$end,"data"=>$tmp));
    }
}
