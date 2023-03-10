<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_food');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('number_of_chair');
            $table->unsignedBigInteger('status');
            $table->timestamps();

            $table->foreign('id_food')->references('id')->on('food');
            $table->foreign('id_customer')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_transaction');
    }
};
