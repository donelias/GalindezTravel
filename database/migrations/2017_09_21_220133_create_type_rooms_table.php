<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('type_rooms', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug', 100)->unique()->nullable();
            $table->text('description')->nullable();
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
        //Schema::drop('type_rooms');
    }
}
