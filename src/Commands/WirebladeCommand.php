<?php

namespace Lianmaymesi\Wireblade\Commands;

use Illuminate\Console\Command;

class WirebladeCommand extends Command
{
    public $signature = 'wireblade';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
