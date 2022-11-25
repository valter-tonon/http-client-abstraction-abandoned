<?php

namespace HttpClient\Protocols;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface IBasicHttpClient extends ClientInterface
{
    public function sendRequest(RequestInterface $request, $options = []): ResponseInterface;
}