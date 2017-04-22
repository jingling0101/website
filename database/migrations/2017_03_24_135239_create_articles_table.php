<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cate_id');
            $table->string('slug')->unique();
            $table->string('key_words')->default('');
            $table->string('meta_description')->default('');
            $table->string('intro')->default('');
            $table->string('title')->default('');
            $table->string('subtitle')->default('');
            $table->text('content_raw');
            $table->text('content_html');
            $table->string('page_image')->default('');
            $table->boolean('is_draft');
            $table->string('layout')->default('blog.layouts.post');
            $table->dateTime('published_at')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
