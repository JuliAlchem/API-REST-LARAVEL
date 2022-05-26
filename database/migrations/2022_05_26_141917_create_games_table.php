<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->integer('die1');
            $table->integer('die2');
            $table->enum('result', ['win','lose']);

            $table->unsignedBigInteger("player_id");
            $table->foreign("player_id")->references('id')->on('players')->onDelete('cascade')->onUpdate('cascade'); //? player id? player nickname?
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
