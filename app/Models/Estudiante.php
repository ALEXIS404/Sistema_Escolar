<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estuduantes';

    protected $fillable = [
        'nombre',
        'apellidos',
        'sexo',
        'direccion',
        'fecha_nacimiento',
    ];
}