<?php

namespace szihaj\LaravelStaticPages\Facades;

use Illuminate\Support\Facades\Facade;

class StaticPage extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'szihaj\LaravelStaticPages\StaticPages';
    }

}
