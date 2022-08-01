<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill__items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->unsignedBigInteger('billings_id');
            $table->integer('qty')->unsigned();
            $table->double('price');
            $table->double('amount');

            $table->foreign('billings_id')->references('id')->on('billings')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('bill_items');
    }
}
