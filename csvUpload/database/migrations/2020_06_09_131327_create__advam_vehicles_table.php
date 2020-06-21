<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvamVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AdvamVehicles', function (Blueprint $table) {
          $table->string('Parker_ID');
          $table->text('Access_Identity');
          $table->text('Vehicle_Make');
          $table->text('Vehicle_Model');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AdvamVehicles');
    }
}
