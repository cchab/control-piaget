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
            
            $table->string('nivel',150)->nullable();
            $table->string('periodo',150)->nullable();
           
            $table->dropColumn('nivel_escolar');
            $table->dropColumn('periodo_escolar');
            
            
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
           
            $table->string('nivel',150)->nullable();
            $table->string('periodo',150)->nullable();
        });
    }
};
