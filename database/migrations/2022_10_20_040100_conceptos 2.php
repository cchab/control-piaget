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
        Schema::create('conceptos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->double('monto')->nullable();
            $table->string('fecha')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('conceptos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
};
