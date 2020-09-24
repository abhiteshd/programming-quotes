<?php namespace Abhiteshd\ProgrammingQuotes\Tests;

use Orchestra\Testbench\TestCase;
use Illuminate\Support\Facades\Artisan;
use Abhiteshd\ProgrammingQuotes\Facades\RandomQuotes;
use Abhiteshd\ProgrammingQuotes\ProgrammingQuotesServiceProvider;
use Abhiteshd\ProgrammingQuotes\Console\RandomQuotesCommand;

class LaravelSpecificTest extends TestCase
{
//orchestra/testbench
    protected function getPackageProviders($app)
    {
        return [
            ProgrammingQuotesServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'RandomQuote' => RandomQuotesCommand::class,
        ];
    }

    /** @test */
    public function console_command_should_return_a_quote()
    {
        $this->withoutMockingConsoleOutput();

        RandomQuotes::shouldReceive('getRandomQuote')
                    ->once()
                    ->andReturn('I don\'t play the odds. I play the man.');

        $this->artisan('random-quotes');

        $output = Artisan::output();

        $this->assertSame('I don\'t play the odds. I play the man.' . PHP_EOL, $output);
    }

    /** @test */
    public function should_be_able_to_access_route()
    {

        RandomQuotes::shouldReceive('getRandomQuote')
                    ->once()
                    ->andReturn('Random quote for route');


        $this->get('/random-quote')
             ->assertViewIs('random-quotes::quote')
             ->assertViewHas('randomQuote', 'Random quote for route')
             ->assertStatus(200);
    }

}

