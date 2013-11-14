<?php

namespace Formativ\Multisite;

use Illuminate\Support\ServiceProvider;

class MultisiteServiceProvider
extends ServiceProvider
{
    protected $defer = false;

    public function register()
    {
        $this->app["multisite.translator"] = $this->app->share(function($app)
        {
            $loader = $app["translation.loader"];
            $locale = $app["config"]["app.locale"];
            $trans  = new Translator($loader, $locale);

            return $trans;
        });
    }

    public function boot()
    {
        $this->package("formativ/multisite", "multisite");
    }

    public function provides()
    {
        return [];
    }
}