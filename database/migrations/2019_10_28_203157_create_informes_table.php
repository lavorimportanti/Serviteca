<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('revision_id');
            $table->string('damage');
            $table->string('observations');
            $table->string('Resultado');
            $table->foreign('revision_id')->references('id')->on('revisions');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informes');
    }
}
