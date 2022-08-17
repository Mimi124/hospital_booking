<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('prescription_id');

            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('patient_id');
         
            $table->string('blood_pressure')->nullable();
            $table->string('diabetes')->nullable();
            $table->string('symptoms');
            $table->string('diagnosis');
            $table->string('advice')->nullable();
            $table->date('date');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('prescriptions');
    }
}
