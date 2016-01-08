<?php

namespace AC\MediaBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AjaxControllerTest extends WebTestCase
{
    public function testSample()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sample');
    }

    public function testUploadfile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/uploadFile');
    }

}
