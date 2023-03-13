<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{

    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->date('fecha')->nullable();
            $table->date('vigencia')->nullable();
           $table->unsignedBigInteger('alumno_id')->nullable();
           
           $table->foreign('alumno_id')
           ->references('id')->on('alumnos')->onDelete('set null');

           $table->unsignedBigInteger('curso_id')->nullable();
           $table->foreign('curso_id')
           ->references('id')->on('cursos')->onDelete('set null');

        
            $table->double('importetotal')->nullable();
            $table->integer('folio')->nullable();
            $table->string('photo_pago')->nullable();
            $table->boolean('status')->nullable();
            $table->string('tipo')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
