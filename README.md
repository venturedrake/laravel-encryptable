# Laravel Encryptable

[![Latest Version on Packagist](https://img.shields.io/packagist/v/venturedrake/laravel-encryptable.svg?style=flat-square)](https://packagist.org/packages/venturedrake/laravel-encryptable)
[![Build Status](https://travis-ci.com/venturedrake/laravel-encryptable.svg?branch=master)](https://travis-ci.com/venturedrake/laravel-encryptable)
[![StyleCI](https://github.styleci.io/repos/310988638/shield?branch=master)](https://github.styleci.io/repos/310988638?branch=master)
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/3e78594a3733454e9ebed819debed985)](https://www.codacy.com/gh/venturedrake/laravel-encryptable/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=venturedrake/laravel-encryptable&amp;utm_campaign=Badge_Grade)
<!--- [![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/venturedrake/laravel-encryptable/run-tests?label=tests)](https://github.com/venturedrake/laravel-encryptable/actions?query=workflow%3Arun-tests+branch%3Amaster) --->
[![Total Downloads](https://img.shields.io/packagist/dt/venturedrake/laravel-encryptable.svg?style=flat-square)](https://packagist.org/packages/venturedrake/laravel-encryptable)

Automatically encrypt and decrypt database table fields.

> ⚠️ Warning: This is a pre-release version that is not yet ready for production use.

## Installation

You can install the package via composer:

``` bash
composer require venturedrake/laravel-encryptable
```

You can publish the config file with:
``` bash
php artisan vendor:publish --provider="VentureDrake\LaravelEncryptable\LaravelEncryptableServiceProvider" --tag="config"
```

## Usage

Add the trait to your model and your encryptable rules.
``` php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use VentureDrake\LaravelEncryptable\Traits\LaravelEncryptableTrait;

class Person extends Model
{
    use LaravelEncryptableTrait;
    
    /**
	 * Laravel Encryptable Rules
	 *
	 * @var array
	 */
    protected $encryptable = [
        'first_name',
        'last_name',
    ];
    
...  
}
```

Now when you store, update or read from the model the first_name and last_name fields will automatically be encrypted and decrypted.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Andrew Drake](https://github.com/AndrewDrake)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
