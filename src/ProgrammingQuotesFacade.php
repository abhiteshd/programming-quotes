<?php

namespace Abhiteshd\ProgrammingQuotes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abhiteshd\ProgrammingQuotes\Skeleton\SkeletonClass
 */
class ProgrammingQuotesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'programming-quotes';
    }
}
