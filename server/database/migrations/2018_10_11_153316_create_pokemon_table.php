<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('pokedex_number')->default(0);
            $table->string('img_name');
            $table->integer('generation')->default(0);
            $table->binary('evolved');
            $table->integer('family_id')->nullable();
            $table->binary('cross_gen');
            $table->string('type_one')->nullable();
            $table->string('type_two')->nullable();
            $table->string('weather_one')->nullable();
            $table->string('weather_two')->nullable();
            $table->integer('stat_total')->default(0);
            $table->integer('power_atack')->default(0);
            $table->integer('power_defense')->default(0);
            $table->integer('sta')->default(0);
            $table->binary('legendary');
            $table->binary('aquireable');
            $table->binary('spawns');
            $table->binary('regional');
            $table->integer('raidable')->default(0);
            $table->integer('hatchable')->default(0);
            $table->binary('shiny');
            $table->binary('nest');
            $table->binary('new');
            $table->binary('not-gettable');
            $table->binary('future_evolve');
            $table->bigInteger('per_cp@40')->default(0);
            $table->bigInteger('per_cp@39')->default(0);
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
        Schema::dropIfExists('pokemon');
    }
}
