# http-client-abstraction


[![Coding Standards](https://img.shields.io/badge/cs-PSR--18-yellow.svg)](https://github.com/php-fig-rectified/fig-rectified-standards)

This package provides a PSR-18 abstraction for Http Clients.

## Installation

```bash
composer require valter-tonon/http-client-abstraction
```

## Usage

```php
$client = new BasicHttpClient(new Client, new RequestFactory);
$requestFactory = new RequestFactory();
$request = $requestFactory->createRequest('GET', 'https://example.com');
$response = $client->sendRequest($request, ['timeout' => 2]);
```

## License
MIT

## Credits
- [Valter L. Tonon][link-author]


[link-author]:https://github.com/valter-tonon
