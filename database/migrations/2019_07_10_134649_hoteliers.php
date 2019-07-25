<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hoteliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoteliers', function (Blueprint $table) {
            $table->increments('id_hoteliers');
            $table->string('name');
            $table->string('alamat');
            $table->string('email');
            $table->string('phone_number');
            $table->string('hotelier_code')->nullable();
            $table->string('password');
            $table->string('company');
            $table->boolean('actived')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoteliers');
    }
}
