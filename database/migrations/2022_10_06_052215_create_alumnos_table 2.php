<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{

    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',150)->nullable();
            $table->string('primer_apellido',50)->nullable();
            $table->string('segundo_apellido',250)->nullable();
            $table->string('sexo',250)->nullable();
            $table->string('fecha_nacimiento',50)->nullable();
            $table->string('curp',250)->nullable();
            $table->string('edad')->nullable();
            $table->string('tipo_sangre',150)->nullable();
            $table->string('nivel_escolar', 150)->nullable();
            $table->string('grado',50)->nullable();
            $table->string('grupo',50)->nullable();
            $table->string('periodo_escolar', 150)->nullable();
            $table->string('parentesco', 150)->nullable();
            $table->string('nombre_emergencia',50)->nullable();
            $table->string('parentesco2',50)->nullable();
            $table->string('tel1_autorizada',50)->nullable();
            $table->string('foto_estudiante',50)->nullable();

            
            $table->foreignId('curso_id')
                ->nullable()
                ->constrained('cursos')
                ->onDelete('set null');

            $table->foreignId('profesor_id')
                ->nullable()
                ->constrained('profesores')
                ->onDelete('set null');     

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
