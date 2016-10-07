# Acme Php Service Provider for Silex

Provides a service for [Octopuce Let's Encrypt Acme PHP Client](https://github.com/octopuce/acmephpc) in your silex application


## Installation

Use composer and specify branch accordingly to your silex version :

For Silex 1.x :
```
$ composer require solocreation/acme-php-service-provider:~1
```

For Silex 2.X
```
$ composer require solocreation/acme-php-service-provider:~2
```

## Usage

Register the service provider in your app

```php

// Define any config options here
$config = array(
    'acmephpc.config' => [...],
);

$app->register(new SoloCreation\AcmePhpServiceProvider(), $config);

// The client is now available in $app['acme.client']
$app['acme.client']->newOwnership('mydomain.tld');

```

For full documentation, please refer to the [Client homepage](https://github.com/octopuce/acmephpc).

