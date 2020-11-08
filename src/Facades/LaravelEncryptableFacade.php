<?php

namespace VentureDrake\LaravelEncryptable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VentureDrake\LaravelEncryptable\LaravelEncryptable
 */
class LaravelEncryptableFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-encryptable';
    }
}
