<?php

namespace VentureDrake\LaravelEncryptable;

use Illuminate\Support\ServiceProvider;
use VentureDrake\LaravelEncryptable\Commands\LaravelEncryptableCommand;

class LaravelEncryptableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-encryptable.php' => config_path('laravel-encryptable.php'),
            ], 'config');
            
            $this->commands([
                LaravelEncryptableCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-encryptable.php', 'laravel-encryptable');
    }
}
