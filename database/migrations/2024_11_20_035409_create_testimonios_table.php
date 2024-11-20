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
        Schema::create('testimonios', function (Blueprint $table) {
            $table->id('ID_testimonio');
            $table->unsignedBigInteger('ID_cliente')->nullable(); // Campo opcional
            $table->string('email');
            $table->text('contenido');
            $table->integer('rating'); // Calificación de 1 a 5
            $table->timestamps();

            // Relación opcional con clientes
            $table->foreign('ID_cliente')->references('ID_cliente')->on('clientes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonios');
    }
};
