<?php

namespace kblog\frontend\HomeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SidebarControllerTest extends WebTestCase
{
    public function testRandomblogphotos()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/randomBlogPhotos');
    }

}
