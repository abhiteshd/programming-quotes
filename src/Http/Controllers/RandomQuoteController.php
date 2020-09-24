<?php namespace Abhiteshd\ProgrammingQuotes\Http\Controllers;


use Abhiteshd\ProgrammingQuotes\Facades\RandomQuotes;

class RandomQuoteController
{

    public function index()
    {
//        return RandomQuotes::getRandomQuote();

        return view('random-quotes::quote', [
            'randomQuote' => RandomQuotes::getRandomQuote(),
        ]);


    }

}
