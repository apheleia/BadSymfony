<?php

namespace Apheleia\ExerciseBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/list/1');

        $this->assertTrue($crawler->filter('html:contains("List (ID 1)")')->count() > 0);
    }
}
