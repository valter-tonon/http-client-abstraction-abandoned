<?php

namespace HttpClient;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class BasicHttpClient implements ClientInterface
{

    /**
     * @var ClientInterface $client
     */
    private $client;

    /**
     * @var RequestFactoryInterface $requestFactory
     */
    private $requestFactory;

    public function __construct(
        ClientInterface $client,
        RequestFactoryInterface $requestFactory
    ) {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
    }


    /**
     * @throws ClientExceptionInterface
     */
    public function sendRequest(RequestInterface $request, $options = []): ResponseInterface
    {
        $request = $this->requestFactory->createRequest(
            $request->getMethod(),
            $request->getUri()
        );
        return $this->client->sendRequest($request, $options);
    }
}