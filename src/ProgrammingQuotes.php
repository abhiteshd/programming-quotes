<?php

namespace Abhiteshd\ProgrammingQuotes;
use GuzzleHttp\Client;

class ProgrammingQuotes
{
    const API_ENDPOINT = 'https://programming-quotes-api.herokuapp.com/quotes/random';

    protected $client;

    /**
     * ProgrammingQuotes constructor.
     *
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getRandomQuote()
    {
        $response = $this->client->get(self::API_ENDPOINT);

        $quote = json_decode($response->getBody()->getContents());

        return $quote->en;
    }



}
