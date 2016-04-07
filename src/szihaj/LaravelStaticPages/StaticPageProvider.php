<?php

namespace szihaj\LaravelStaticPages;

use App;
use szihaj\LaravelStaticPages\StaticPages;
use Illuminate\Support\ServiceProvider;

class StaticPageProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
	        __DIR__.'/../../database/migrations/' => database_path('migrations')
	    ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('StaticPage', function() {
            return new StaticPages();
        });
    }
}
