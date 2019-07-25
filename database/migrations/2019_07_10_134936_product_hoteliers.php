<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductHoteliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_hoteliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hoteliers');
            $table->string('nama_hotels');
            $table->string('alamat_hotels');
            $table->string('jumlah_unit');
            $table->string('city');
            $table->string('country');
            $table->string('status_hotels');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('fax');
            $table->string('email_reservation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_hoteliers');
    }
}
