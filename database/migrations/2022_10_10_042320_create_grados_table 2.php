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
        Schema::create('grados', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->nullable();

            $table->foreignId('niveles_id')
                ->nullable()
                ->constrained('niveles')
                ->onDelete('set null');

            $table->foreignId('periodos_id')
                ->nullable()
                ->constrained('periodos')
                ->onDelete('set null');

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
        Schema::dropIfExists('grados');
    }
};
