<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'empleado_id', // Agrega 'empleado_id' al array fillable
        'dia',
        'descansa',
        'manana_entrada',
        'manana_salida',
        'tarde_entrada',
        'tarde_salida',
    ];
}
