<?php

namespace ExtPHP\Dottp;

use GuzzleHttp\Client;

class Dottp extends Client
{
    public function request($method, $uri = '', array $options = [])
    {
        $response = parent::request($method, $uri, $options);
        return new Response($response);
    }

    public static function __callStatic($method, $args)
    {
        $instance = new self();
        return $instance->$method(...$args);
    }
}
