<?php

namespace HttpClient\Adapter\UseCases;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use HttpClient\Protocols\IBasicHttpClient;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class GuzzleClientAdapter extends Client implements IBasicHttpClient
{
    /**
     * @throws GuzzleException
     */
    public function sendRequest(RequestInterface $request, $options = []): ResponseInterface
    {
        return $this->send($request, $options);
    }
}