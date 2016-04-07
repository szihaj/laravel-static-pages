# szihaj/laravel-static-pages

## Installation ##

    $ composer require szihaj/laravel-static-pages

Add the Service Provider to your config/app.php file like so:

    ...
    szihaj\LaravelStaticPages\StaticPageProvider::class,

Add the Facade to your aliases in config/app.php

    'StaticPages' => szihaj\LaravelStaticPages\Facades\StaticPage::class,

Finally, publish the migrations, and run them:

    $ php artisan vendor:publish --tag=migrations
    $ php artisan migrate
