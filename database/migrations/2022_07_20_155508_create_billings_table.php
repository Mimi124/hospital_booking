<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id');
<<<<<<< HEAD
            $table->id();
=======
            $table->foreign('patient_id')->references('user_id')->on('patients');
>>>>>>> e1e81e3bacdbffc0234e2124b00d1e426b66cdb4
            $table->string('bill_date');
            $table->double('amount')->nullable();
            $table->foreign('patient_id')->references('user_id')->on('patients');
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
        Schema::dropIfExists('billings');
    }
}
