<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TypeRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_room', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hotels_product');
            $table->string('type_room');
            $table->string('breakfest');
            $table->string('status');
            $table->string('smoking');
            $table->string('persons');
            $table->string('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_room');
    }
}
