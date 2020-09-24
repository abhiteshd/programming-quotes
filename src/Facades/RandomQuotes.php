<?php

namespace Abhiteshd\ProgrammingQuotes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abhiteshd\ProgrammingQuotes\ProgrammingQuotes
 */
class RandomQuotes extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'random-quotes';
    }
}
