<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'instructor_id',
        'user_id',
        'fecha',
        'entrada',
        'salida',
        'sucursal_id',
        'rutina_id',
    ];
}
