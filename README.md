<p align="center">
<img src="https://vapi.ai/brand/img/va-square-2.svg" alt="Vapi PHP SDK" height="150">
<img src="https://www.php.net/images/logos/php-logo.svg" alt="PHP" height="40">
</p>

<p align="center">
<a href="https://github.com/spiralink-ai/vapi-php-sdk/actions"><img src="https://github.com/SpiraLink-AI/vapi-php-sdk/actions/workflows/test.yml/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/spiralink/vapi-php-sdk"><img src="https://img.shields.io/packagist/dt/spiralink/vapi-php-sdk" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/spiralink/vapi-php-sdk"><img src="https://img.shields.io/packagist/v/spiralink/vapi-php-sdk" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/spiralink/vapi-php-sdk"><img src="https://img.shields.io/packagist/l/spiralink/vapi-php-sdk" alt="License"></a>
</p>

## Vapi PHP SDK

This SDK provides convenient, fully-typed access to [Vapi's API](https://docs.vapi.ai/api-reference). 

## Installation

You can install the package via [composer](https://getcomposer.org):

```bash
composer require spiralink/vapi-php-sdk
```

## Usage

You can always refer to the [documentation](https://docs.vapi.ai/api-reference) to examine the various resources that are available.

```php
use Vapi\Vapi;

$vapi = new Vapi(token: 'your-api-token');

$assistants = $vapi->assistants->list();
```

## Handling exceptions

If something goes wrong during any kind of interaction, an exception of type `VapiApiException` will be thrown:

```php
use Vapi\Exceptions\VapiApiException;

try {
    $call = $vapi->calls->create($request);
} catch (VapiApiException $ex) {
    $logger->log($ex->getMessage());
}
```

## Retries

The SDK is instrumented with automatic retries with exponential backoff. A request will be retried as long
as the request is deemed retriable and the number of retry attempts has not grown larger than the configured
retry limit (default: 2).

A request is deemed retriable when any of the following HTTP status codes is returned:

- [408](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/408) (Timeout)
- [429](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/429) (Too Many Requests)
- [5XX](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/500) (Internal Server Errors)

Use the `maxRetries` request option to configure this behavior.

```php
$call = $vapi->calls->create($request, [
    'maxRetries' => 0, // Override maxRetries at the request level
]);
```

## Timeouts

The SDK defaults to a 30 second timeout. Use the `timeout` option to configure this behavior.

```php
$call = $vapi->calls->create($request, [
    'timeout' => 15, // Override timeout at the request level
]);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email support@spiralink.ai instead of using the issue tracker.

## Credits

- [Muhammed Sari](https://github.com/mabdullahsari)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.