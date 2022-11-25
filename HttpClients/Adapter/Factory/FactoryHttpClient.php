<?php

namespace HttpClient\Adapter\Factory;


use Http\Factory\Guzzle\RequestFactory;
use HttpClient\Adapter\UseCases\GuzzleClientAdapter;
use HttpClient\BasicHttpClient;
use Psr\Http\Client\ClientInterface;

class FactoryHttpClient
{
    public static function makeGuzzleClient(): BasicHttpClient
    {
        return new BasicHttpClient(new GuzzleClientAdapter(), new RequestFactory());
    }

    public static function makeDefaultClient(): ClientInterface
    {
        return new BasicHttpClient(new GuzzleClientAdapter(), new RequestFactory());
    }


}