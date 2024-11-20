<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('carrito_items', function (Blueprint $table) {
            $table->id('ID_item');
            $table->string('carrito_session')->index(); // Identificador único del carrito
            $table->unsignedBigInteger('ID_producto');
            $table->integer('cantidad')->default(1);

            $table->foreign('ID_producto')
                ->references('ID_producto')
                ->on('productos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carrito_items');
    }
};
