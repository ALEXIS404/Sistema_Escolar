<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'asistencias';

    protected $fillable = [
       'estudiante_id',
        'horario_id',
        'fecha',
        'asistencia',
    ];
}
