<?php

namespace Abhiteshd\ProgrammingQuotes;

use Abhiteshd\ProgrammingQuotes\Console\RandomQuotesCommand;
use Abhiteshd\ProgrammingQuotes\Http\Controllers\RandomQuoteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ProgrammingQuotesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /** Register your custom command */
        if ($this->app->runningInConsole()) {
            $this->commands([
                RandomQuotesCommand::class,
            ]);
        }

        /** register the route */
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'random-quotes');

//        Route::get('random-quote', [RandomQuoteController::class, 'index']);




        Route::get(config('random-quotes.route'), [RandomQuoteController::class, 'index']);



        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('random-quotes.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/random-quotes'),
            ], 'views');


        }

    }

    /**
     * Register the application services.
     */
    public function register()
    {

        // Register the main class to use with the facade
        $this->app->singleton('random-quotes', function () {
            return new ProgrammingQuotes;
        });


        // apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'random-quotes');

    }
}
