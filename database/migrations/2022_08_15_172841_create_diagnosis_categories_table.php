<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosisCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->nullOnDelete();
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
        Schema::dropIfExists('diagnosis_categories');
    }
}
