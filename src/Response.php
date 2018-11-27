<?php

namespace ExtPHP\Dottp;

use ExtPHP\DataDot\Dot;

class Response
{
    protected $response;
    protected $body;

    public function __construct($response)
    {
        $this->response = $response;
        $this->dottify();
    }

    public function __call($method, $args)
    {
        return $this->response->$method(...$args);
    }

    public function get($key, $default = null)
    {
        return $this->body->get($key, $default);
    }

    public function has($key)
    {
        return $this->body->has($key);
    }

    protected function dottify()
    {
        $this->body = new Dot(json_decode($this->response->getBody()));
    }
}