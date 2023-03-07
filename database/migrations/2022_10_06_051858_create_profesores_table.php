<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesoresTable extends Migration
{

    
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->nullable();
            $table->string('nombre',150)->nullable();
            $table->string('fecha_nacimiento',30)->nullable();
            $table->string('edad',20)->nullable();
            $table->string('genero',20)->nullable();
            $table->string('email')->nullable();
            $table->string('telefono',20)->nullable();
            $table->string('localidad',150)->nullable();
            $table->string('domicilio',20)->nullable();
           

            
         

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}