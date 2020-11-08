<?php

namespace Venturedrake\LaravelEncryptable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Venturedrake\LaravelEncryptable\LaravelEncryptable
 */
class LaravelEncryptableFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-encryptable';
    }
}
