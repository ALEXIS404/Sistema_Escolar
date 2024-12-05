<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'calificaciones';

    protected $fillable = [
        'estudiante_id',
        'asignatura_id',
        'docente_id',
        'semestre',
        'tipo_calificacion',
        'nota',
        'fecha_registro',
    ];
}




