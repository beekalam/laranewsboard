<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('title', 512);
            $table->string('slug', 512);
            $table->string('keywords', 512)->nullable();
            $table->string('description', 5000)->nullable();
            $table->text('page_content')->nullable();
            $table->tinyInteger('is_custom')->nullable();
            $table->tinyInteger('page_order')->nullable();
            $table->tinyInteger('visibility')->nullable();
            $table->tinyInteger('title_active')->nullable();
            $table->tinyInteger('breadcrumb_active')->nullable();
            $table->tinyInteger('right_column_active')->nullable();
            $table->tinyInteger('need_auth')->nullable();
            $table->string('location')->nullable();
            $table->string('link')->nullable();
            $table->bigInteger('parent_id')->default('0');
            $table->string('page_type')->default('page');
            $table->bigInteger('category_id');
            $table->bigInteger('subcategory_id')->nullable();
            $table->string('post_type');
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
