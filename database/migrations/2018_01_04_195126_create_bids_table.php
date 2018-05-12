<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('bid_id');
            $table->integer('post_idFk')->unsigned();
            $table->integer('user_idFk')->unsigned();
            $table->integer('bid_amount');
            $table->enum("bid_status", array(0,1,2))->default(0);
            $table->timestamps();
        });

        Schema::table('bids', function($table){
            $table->foreign('user_idFk')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('post_idFk')->references('post_id')->on('posts')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
