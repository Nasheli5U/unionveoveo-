<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas'; // Nombre de la tabla
    protected $primaryKey = 'ID_reserva'; // Llave primaria personalizada

    protected $fillable = [
        'nombre',        // Nombre del cliente
        'apellido',      // Apellido del cliente
        'email',         // Correo del cliente
        'dni',           // DNI del cliente
        'celular',       // Celular del cliente
        'fecha_hora',    // Fecha y hora de la reserva
    ];
}
