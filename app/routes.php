<?php

$locales = [
    "en",
    "nl"
];

foreach ($locales as $locale)
{
    App::setLocale($locale);

    $cheese = trans("routes.cheese");
    $create = trans("routes.create");
    $update = trans("routes.update");
    $delete = trans("routes.delete");

    Route::any($cheese . "/" . $create, function() use ($cheese, $create)
    {
        return $cheese . "/" . $create;
    });

    Route::any($cheese . "/" . $update, function() use ($cheese, $update)
    {
        return $cheese . "/" . $update;
    });

    Route::any($cheese . "/" . $delete, function() use ($cheese, $delete)
    {
        return $cheese . "/" . $delete;
    });
}

Route::group([
    "domain" => "dev.www.tutorial-laravel-4-multisites"
], function()
{
    Route::any("/about", function()
    {
        return "This is the client-facing website.";
    });
});

Route::group([
    "domain" => "dev.admin.tutorial-laravel-4-multisites"
], function()
{
    Route::any("/about", function()
    {
        return "This is the admin site.";
    });
});

Route::group([
    "domain" => "dev.{sub}.tutorial-laravel-4-multisites"
], function()
{
    Route::any("/whoami", function($sub)
    {
        return "You are in the '" . $sub . "' sub-domain.";
    });
});

Route::group([
    "domain" => "dev.{sub}.tutorial-laravel-4-multisites"
], function()
{
    Route::any("/", [
        "as"   => "index/index",
        "uses" => "IndexController@indexAction"
    ]);
});