<?php

namespace DraftsmanDev\DraftsmanDevLaravel\Commands;

use Illuminate\Console\Command;

class DraftsmanDevLaravelCommand extends Command
{
    public $signature = 'draftsmandev-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
