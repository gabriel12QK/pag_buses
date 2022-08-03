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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('matricula')->unique();
            $table->string('modelo');
            $table->integer('numero');
            $table->integer('capacidad');
            $table->boolean('estado');
           $table->foreignId('id_chofer')->constrained('personas');
           $table->foreignId('id_coop')->constrained('cooperativas');
           $table->foreignId('id_ruta')->constrained('rutas');

            
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
};
