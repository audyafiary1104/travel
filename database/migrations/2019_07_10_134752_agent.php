<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent', function (Blueprint $table) {
            $table->increments('id_agent');
            $table->string('name');
            $table->string('alamat');
            $table->string('phone_number');
            $table->string('agent_code')->nullable();
            $table->string('balance')->default(0);
            $table->string('email')->unique();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('agent');
    }
}
