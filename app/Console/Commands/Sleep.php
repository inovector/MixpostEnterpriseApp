<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Sleep extends Command
{
    protected $signature = 'mixpost:sleep {--seconds=1}';

    protected $description = 'Sleep for seconds. Use this command only in composer.json';

    public function handle(): void
    {
        sleep($this->option('seconds'));
    }
}