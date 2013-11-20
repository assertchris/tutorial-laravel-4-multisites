<?php

class IndexController
extends BaseController
{
    public function indexAction($sub)
    {
        App::setLocale("en");

        if (Input::get("lang") === "nl")
        {
            App::setLocale("nl");
        }

        return View::make("index/index", [
            "post" => Post::first()
        ]);
    }
}