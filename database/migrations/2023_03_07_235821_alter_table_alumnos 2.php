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
        Schema::table('alumnos', function(Blueprint $table) {

            $table->dropColumn('nivel_escolar');
            $table->dropColumn('periodo_escolar');
            $table->dropColumn('grado');
            $table->dropColumn('grupo');

            $table->integer('nivel')->nullable();
            $table->integer('periodo')->nullable();
            $table->integer('grado_id')->nullable();
            $table->integer('grupo_id')->nullable();

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
