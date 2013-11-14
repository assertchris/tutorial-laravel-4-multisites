<?php

namespace Formativ\Multisite\Facades;

use Illuminate\Support\Facades\Facade;

class Lang
extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "multisite.translator";
    }
}