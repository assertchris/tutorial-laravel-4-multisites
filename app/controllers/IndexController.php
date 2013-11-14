<?php

class IndexController
extends BaseController
{
    public function indexAction($sub)
    {
        App::setLocale($sub);

        return View::make("index/index", [
            "post" => Post::first()
        ]);
    }
}