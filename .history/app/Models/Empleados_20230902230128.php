<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleados extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Asegúrate de especificar la columna de clave foránea si no se llama 'user_id'
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // public function horarios()
    // {
    //     return $this->hasMany(Horario::class);
    // }

    // public function asistencias()
    // {
    //     return $this->hasMany(Asistencia::class);
    // }
}
