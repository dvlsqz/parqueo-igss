<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_lots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parking');
            $table->string('num_parking');
            $table->string('location');
            $table->string('asignado_name');
            $table->string('asignado_lastname');
            $table->string('asignado_ibm');
            $table->string('job');
            $table->string('service');
            $table->string('placa');
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->string('status');
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
        Schema::dropIfExists('parking_lots');
    }
}
