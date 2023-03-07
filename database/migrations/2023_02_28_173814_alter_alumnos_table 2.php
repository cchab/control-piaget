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
            $table->string('nombre_tutor', 150)->nullable();
            $table->string('tutor_principal', 150)->nullable();
            $table->string('direccion',50)->nullable();
            $table->string('colonia',50)->nullable();
            $table->string('telefono_contacto',150)->nullable();

            $table->dropColumn('domicilio');
            $table->dropColumn('tel_emergencia');
            $table->dropColumn('persona_autorizada');
            $table->dropColumn('tel2_autorizada');
            $table->dropColumn('domicilio_autorizada');
            $table->dropColumn('persona_autorizada2');
            $table->dropColumn('tel1_autorizada2');
            $table->dropColumn('tel2_autorizada2');
            $table->dropColumn('domicilio_autorizada2');
            $table->dropColumn('observ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alumnos', function (Blueprint $table) {
            $table->dropColumn('nombre_tutor', 150)->nullable();
            $table->dropColumn('tutor_principal', 150)->nullable();
            $table->dropColumn('direccion',50)->nullable();
            $table->dropColumn('colonia',50)->nullable();
            $table->dropColumn('telefono_contacto',150)->nullable();
        });
    }
};
