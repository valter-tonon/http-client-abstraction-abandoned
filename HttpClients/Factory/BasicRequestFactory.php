<?php

namespace HttpClient\Factory;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;

class BasicRequestFactory implements RequestFactoryInterface
{

    public function createRequest(string $method, $uri): RequestInterface
    {
        return new Request($method, $uri);
    }
}