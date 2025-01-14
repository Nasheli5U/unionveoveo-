<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('ID_cliente');
            $table->string('dni')->unique();
            $table->string('nombre');
            $table->date('fecha_nacimiento');
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('preferencias_contacto')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
