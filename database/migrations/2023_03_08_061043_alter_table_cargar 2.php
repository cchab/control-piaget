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

            $table->dropColumn('asignatura_id');
            $table->dropColumn('alumno_id');
            $table->dropColumn('nivel');
            $table->dropColumn('grupo');

            $table->integer('nivel_id')->nullable();
            $table->integer('grupo_id')->nullable();;


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
