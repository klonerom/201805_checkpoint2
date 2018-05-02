<?php

namespace Test;

use \PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
  /**
  * @var \GuzzleHttp\Client
  */
    private $client;

    const SERVER = 'http://localhost:8000';

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->client = new \GuzzleHttp\Client();
        libxml_use_internal_errors(true);
      // Restore base ?
    }

  /**
  * @dataProvider urlOkProvider
  */
    public function testStatusSucces($url)
    {
        $res = $this->client->request('GET', self::SERVER . $url);
        $status = $res->getStatusCode();
        $this->assertEquals(200, $status);
    }

    public function urlOkProvider()
    {
        require_once __DIR__ . '/../app/routing.php';
        $urls = [];
        foreach ($routes as $controller => $actions) {
            foreach ($actions as $action) {
                $urls[] = [$controller . '/' . $action[0] => $action[1]];
            }
        }

        return $urls;
    }
}
