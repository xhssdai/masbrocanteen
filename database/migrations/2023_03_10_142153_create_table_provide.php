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
        Schema::create('provide', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_food');
            $table->unsignedBigInteger('id_tenant');

            $table->foreign('id_food')->references('id')->on('food');
            $table->foreign('id_tenant')->references('id')->on('tenant');
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
        Schema::dropIfExists('table_provide');
    }
};
