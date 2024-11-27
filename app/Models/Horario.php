<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $table = 'horarios';

    protected $fillable = [
    'asignatura_id',
        'docente_id',
        'grado',
        'dia',
        'hora_inicio',
        'hora_fin',
        'aula',
    ];
}
