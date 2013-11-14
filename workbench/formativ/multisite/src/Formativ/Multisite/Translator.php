<?php

namespace Formativ\Multisite;

use Cache;
use Illuminate\Translation\Translator as Original;

class Translator
extends Original
{
    public function get($key, array $replace = array(), $locale = null)
    {
        $cached = Cache::remember($key, 15, function() use ($key, $replace, $locale)
        {
            return parent::get($key, $replace, $locale);
        });

        return $cached;
    }
}