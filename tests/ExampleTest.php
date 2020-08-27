<?php

namespace Abhiteshd\ProgrammingQuotes\Tests;

use Orchestra\Testbench\TestCase;
use Abhiteshd\ProgrammingQuotes\ProgrammingQuotesServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ProgrammingQuotesServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
