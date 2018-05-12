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
            $table->increments('post_id');
            $table->string('name');
            $table->integer('model_year');
            $table->string('km_used');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->integer('contact_no');
            $table->string('color')->nullable();
            $table->integer('mileage');
            $table->string('image');
            $table->integer('created_by')->unsigned();
            $table->timestamps();
        });

        Schema::table('posts', function($table){
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict');
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
