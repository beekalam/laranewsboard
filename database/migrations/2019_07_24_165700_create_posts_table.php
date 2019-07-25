<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',512);
            $table->string('slug',512);
            $table->string('keywords',512);
            $table->string('summary',5000);
            $table->text('content');
            $table->bigInteger('category_id');
            $table->bigInteger('subcategory_id');
            $table->bigInteger('hits');
            $table->bigInteger('user_id');
            $table->tinyInteger('status');

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
        Schema::dropIfExists('posts');
    }
}
