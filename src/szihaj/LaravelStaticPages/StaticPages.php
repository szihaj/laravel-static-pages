<?php

namespace szihaj\LaravelStaticPages;

use szihaj\LaravelStaticPages\Models\StaticPage;

class StaticPages
{
    /**
     * Display a static page.
     */
    public function display($pageName)
    {
        $page = StaticPage::where('slug', $pageName)->firstOrFail();

        return view('static', compact('page'));
    }
}
