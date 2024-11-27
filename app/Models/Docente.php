<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';

    protected $fillable = [
        'nombre',
        'apellido',
        'sexo',
        'telefono',
        'cedula',
        'domicilio',
    ];
}
