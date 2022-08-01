<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('time');
            $table->integer('patient_id');
            $table->integer('doctor_id');
            $table->integer('template_id');
            $table->string('report');
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
        Schema::dropIfExists('lab_reports');
    }
}
