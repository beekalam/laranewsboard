<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostOrderedListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_ordered_list_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_id')->unsigned();
            $table->string('title', 500);
            $table->text('content');
            $table->string('image')->nullable();
            $table->string('image_large')->nullable();
            $table->string('image_description')->nullable();
            $table->smallInteger('item_order')->nullable();
            $table->tinyInteger('is_collapsed')->nullable();
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
        Schema::dropIfExists('post_ordered_list_items');
    }
}
