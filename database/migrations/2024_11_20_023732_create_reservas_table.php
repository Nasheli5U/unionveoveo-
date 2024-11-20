<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('ID_reserva'); // ID personalizado
            $table->string('nombre'); // Nombre del cliente
            $table->string('apellido'); // Apellido del cliente
            $table->string('email'); // Correo del cliente
            $table->string('dni')->unique(); // DNI único
            $table->string('celular'); // Celular del cliente
            $table->timestamp('fecha_hora')->unique(); // Fecha y hora única para la reserva
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
