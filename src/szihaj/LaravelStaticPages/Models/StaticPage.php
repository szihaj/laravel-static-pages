<?php

namespace szihaj\LaravelStaticPages\Models;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    protected $fillable = ['slug', 'content', 'title'];
}
