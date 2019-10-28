<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleEmployeePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_employee_pivot', function (Blueprint $table) {
            $table->unsignedInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_employee_pivot');
    }
}
