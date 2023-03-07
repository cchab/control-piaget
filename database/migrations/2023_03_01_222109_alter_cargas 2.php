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
        Schema::table('cargas', function(Blueprint $table) {
            $table->integer('docente_id');
            $table->integer('alumno_id');
            $table->integer('asignatura_id');
           

            $table->dropColumn('docente');
            $table->dropColumn('asignatura');
            $table->dropColumn('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
