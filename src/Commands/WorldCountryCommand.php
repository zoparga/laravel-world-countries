<?php

namespace zoparga\WorldCountry\Commands;

use Illuminate\Console\Command;

class WorldCountryCommand extends Command
{
    public $signature = 'worldcountries';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
