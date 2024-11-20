<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarritoItem extends Model
{
    use HasFactory;

    protected $table = 'carrito_items';
    protected $primaryKey = 'ID_item';

    protected $fillable = [
        'carrito_session', // Clave única para identificar el carrito
        'ID_producto',     // Relación con la tabla productos
        'cantidad',        // Cantidad de productos
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'ID_producto', 'ID_producto');
    }
}
