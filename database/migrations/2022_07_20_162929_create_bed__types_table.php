<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bed__types', function (Blueprint $table) {
            $table->id();
            $table->integer('bed_id');
            $table->integer('patient_id');
            $table->date('start_date');
            $table->time('start_time');
            $table->date('end_date');
            $table->time('end_time');
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
        Schema::dropIfExists('bed__types');
    }
}
