<?php

class PostTableSeeder
extends DatabaseSeeder
{
    public function run()
    {
        $posts = [
            [
                "title_en"   => "Cheese is the best",
                "title_nl"   => "Kaas is de beste",
                "content_en" => "Research has shown that cheese is healthy...",
                "content_nl" => "Onderzoek heeft aangetoond dat kaas gezond is..."
            ]
        ];

        DB::table("post")->insert($posts);
    }
}