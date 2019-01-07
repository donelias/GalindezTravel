<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('countries', function(Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10)->unique();
            $table->string('country');
            $table->string('continent_country');
            $table->string('country_region');
            $table->string('country_area');
            $table->string('country_independence')->nullable();
            $table->string('country_population')->nullable();
            $table->string('country_life_expectancy')->nullable();
            $table->string('PaisProductoInternoBruto')->nullable();
            $table->string('PaisProductoInternoBrutoAntiguo')->nullable();
            $table->string('PaisNombreLocal')->nullable();
            $table->string('PaisGobierno')->nullable();
            $table->string('PaisJefeDeEstado')->nullable();
            $table->string('PaisCapital')->nullable();
            $table->string('PaisCodigo2')->nullable();
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('countries');
    }
}
