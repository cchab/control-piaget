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
        Schema::create('cargas', function (Blueprint $table) {
            $table->id();

            $table->string('grupo', 250)->nullable();
            $table->integer('grado')->nullable();
            $table->string('nivel', 250)->nullable();
            $table->integer('periodo')->nullable();
            $table->string('docente', 250)->nullable();
            $table->string('asignatura', 250)->nullable();
            $table->integer('bimestre')->nullable();
            $table->string('alumnos', 250)->nullable();
            


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
        Schema::dropIfExists('cargas');
    }
};
