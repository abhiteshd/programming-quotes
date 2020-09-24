<?php
namespace Abhiteshd\ProgrammingQuotes\Console;

use Abhiteshd\ProgrammingQuotes\Facades\RandomQuotes;
use Illuminate\Console\Command;


class RandomQuotesCommand extends Command
{

    protected $signature = 'random-quotes';

    protected $description = 'Print a random programming quote';

    public function handle()
    {
        $this->info(RandomQuotes::getRandomQuote());
    }


}
