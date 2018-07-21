<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('schedules', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->integer('doctor_id')->unsigned();
      $table->integer('patient_id')->unsigned();
      $table->timestamp('date_time');
      $table->timestamps();

      $table->foreign('doctor_id')->references('id')->on('doctors');
      $table->foreign('patient_id')->references('id')->on('patients');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('schedules');
  }
}
