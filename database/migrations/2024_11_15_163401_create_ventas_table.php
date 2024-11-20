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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('ID_venta');
            $table->unsignedBigInteger('ID_cliente')->constrained('clientes');
            $table->decimal('monto_total', 10, 2);
            $table->date('fecha_compra');
            $table->enum('estado', ['Pendiente', 'Pagada', 'Cancelada']);
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};