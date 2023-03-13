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
        Schema::create('formapago', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('valor')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('formapago');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
};