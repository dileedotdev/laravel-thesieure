<?php

namespace Dinhdjj\Thesieure\Commands;

use Illuminate\Console\Command;

class ThesieureCommand extends Command
{
    public $signature = 'thesieure';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
