<?php

namespace VentureDrake\LaravelEncryptable\Commands;

use Illuminate\Console\Command;

class LaravelEncryptableCommand extends Command
{
    public $signature = 'laravel-encryptable';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
