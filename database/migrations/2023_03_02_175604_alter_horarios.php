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
        Schema::table('horarios', function(Blueprint $table) {
            
            $table->integer('grupo_id');
            $table->integer('grado_id');
            $table->integer('docente_id');
            $table->integer('asignatura_id');
            $table->integer('bimestre');
           

            $table->dropColumn('nombre');
            $table->dropColumn('asignatura');
            $table->dropColumn('profesor');
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
