<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->binary('img');
            $table->decimal('height');
            $table->integer('weight');
            $table->string('types');
            $table->string('abilities');
            $table->integer('speed');
            $table->integer('special_defense');
            $table->integer('special_attack');
            $table->integer('defense');
            $table->integer('attack');
            $table->integer('hp');
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
        Schema::dropIfExists('pokemons');
    }
}
