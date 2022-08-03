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
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
            $table->string('nom_ruta')->unique();
            $table->string('salida');
            $table->string('llegada');
            $table->timeTz('recorrido', $precision = 0);
            $table->timeTz('inicio', $precision = 0);
            $table->timeTz('fin', $precision = 0);
            $table->boolean('estado');
            
           //$table->foreignId('id_parada')->constrained('paradas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas');
    }
};
