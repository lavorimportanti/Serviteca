<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleConVehTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_con_veh', function (Blueprint $table) {
            $table->unsignedInteger('vehiculo_id');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
            $table->unsignedInteger('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_con_veh');
    }
}
