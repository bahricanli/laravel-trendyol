# Trendyol API For Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bahricanli/trendyol.svg?style=flat-square)](https://packagist.org/packages/bahricanli/trendyol)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/bahricanli/trendyol/master.svg?style=flat-square)](https://travis-ci.org/bahricanli/trendyol)
[![StyleCI](https://styleci.io/repos/74304440/shield?branch=master)](https://styleci.io/repos/74304440)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/ce5f111f-1be4-4848-a87d-7b2570d153d4.svg?style=flat-square)](https://insight.sensiolabs.com/projects/ce5f111f-1be4-4848-a87d-7b2570d153d4)
[![Quality Score](https://img.shields.io/scrutinizer/g/bahricanli/trendyol.svg?style=flat-square)](https://scrutinizer-ci.com/g/bahricanli/trendyol)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/bahricanli/trendyol/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/bahricanli/trendyol/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/bahricanli/trendyol.svg?style=flat-square)](https://packagist.org/packages/bahricanli/trendyol)

This package makes it easy to send notifications using [Trendyol](http://www.trendyol.com) with Laravel 5.3.

## Contents

- [Installation](#installation)
    - [Setting up the Trendyol service](#setting-up-the-trendyol-service)
- [Usage](#usage)
    - [Available methods](#available-methods)
    - [Available events](#available-events)
- [Changelog](#changelog)
- [Testing](#testing)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)


## Installation

You can install this package via composer:

``` bash
composer require bahricanli/laravel-trendyol
```

Next add the service provider to your `config/app.php`:

```php
/*
 * Package Service Providers...
 */

BahriCanli\Trendyol\TrendyolServiceProvider::class,
```

Register the Trendyol alias to your application.
This registration is not optional because the channel itself uses this very alias.

```php
'Trendyol' => BahriCanli\Trendyol\Trendyol::class,
```

### Setting up the Trendyol service

Add your desired username, password
configuration to your `config/services.php` file:
                                                                     
```php
...
    'Trendyol' => [        
        'username'   => '',
        'password'   => '',        
    ],
...
```


### Notes

$response->groupId() will throw BadMethodCallException if the client is set to 'http'. 
$response->messageReportIdentifiers() will throw BadMethodCallException if the client is set to 'xml'.

change client configuration with caution.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email bahri@bahri.info instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Bahri Meriç Canlı](https://www.bahri.info)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.