<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    use HasFactory;

    protected $table = 'testimonios';
    protected $primaryKey = 'ID_testimonio';

    protected $fillable = [
        'ID_cliente',
        'email',
        'contenido',
        'rating',
    ];

    /**
     * Relación con el modelo Cliente.
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'ID_cliente', 'ID_cliente');
    }
}
