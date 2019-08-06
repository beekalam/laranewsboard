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
            $table->string('keywords',512)->nullable();
            $table->string('summary',5000)->nullable();
            $table->text('content')->nullable();
            $table->bigInteger('category_id');
            $table->bigInteger('subcategory_id')->nullable();
            $table->bigInteger('hits')->nullable();
            $table->bigInteger('user_id');
            $table->tinyInteger('status')->default(1);

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
