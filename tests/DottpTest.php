<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use ExtPHP\Dottp\Dottp;
use ExtPHP\Dottp\Response;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response as GuzzleResponse;

class DottpTest extends TestCase
{
    public function testInstantiation()
    {
        $dottp = new Dottp();
        $this->assertInstanceOf(Dottp::class, $dottp);
    }

    public function testInheritance()
    {
        $dottp = new Dottp();
        $this->assertInstanceOf(Client::class, $dottp);
    }

    public function testRequests()
    {
        $mock = new MockHandler([
            new GuzzleResponse(200, ['X-Foo' => 'Bar']),
        ]);  
        $handler = HandlerStack::create($mock);
        $client = new Dottp(['handler' => $handler]);
        
        $response = $client->request('GET', '/');

        $this->assertInstanceOf(Response::class, $response);
    }
}
