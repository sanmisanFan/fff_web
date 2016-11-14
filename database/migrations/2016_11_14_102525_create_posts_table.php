<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     * 文章类数据表具体的列内容可能还会有变化
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();   //标题变为url一部分
            $table->string('title');
            $table->text('content');
            $table->timestamps();
            $table->timestamp('published_at')->index(); //文章正式发布时间
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
