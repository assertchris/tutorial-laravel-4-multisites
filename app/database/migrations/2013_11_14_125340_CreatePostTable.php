<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostTable
extends Migration
{
    public function up()
    {
        Schema::create("post", function($table)
        {
            $table->increments("id");
            $table->string("title_en");
            $table->string("title_nl");
            $table->text("content_en");
            $table->text("content_nl");
            $table->dateTime("created_at");
            $table->dateTime("updated_at");
            $table->dateTime("deleted_at");
        });
    }

    public function down()
    {
        Schema::dropIfExists("post");
    }
}