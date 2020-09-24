<?php

namespace Abhiteshd\ProgrammingQuotes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Handler\MockHandler;
use Abhiteshd\ProgrammingQuotes\ProgrammingQuotes;

class ProgrammingQuote extends TestCase
{

    /** @test */
    public function should_return_a_random_quote()
    {
        $mock = new MockHandler([
            new Response(200, [],
                '{"_id":"5aab9ade17c21b0004913edb","en":"If it is not working, mark it as version 1.0","author":"Marijn Haverbeke","id":"5aab9ade17c21b0004913edb"}'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client([
            'handler' => $handler
        ]);

        $programmingQuotes = new ProgrammingQuotes($client);

        $randomQuote = $programmingQuotes->getRandomQuote();

        $this->assertSame('If it is not working, mark it as version 1.0', $randomQuote);
    }
}
