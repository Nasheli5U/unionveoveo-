<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'citas'; // Nombre de la tabla
    protected $primaryKey = 'ID_cita'; // Llave primaria personalizada

    protected $fillable = [
        'fecha',  // Fecha de la cita
        'hora',   // Hora de la cita
        'estado', // Estado de la cita (disponible, ocupada, cancelada, etc.)
    ];
}
