<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculasController extends Controller
{
    public array $estadoMatricula = [
        1 => 'Activa',
        2 => 'Inactiva',
    ];

    //funcion para guardar un Estudiante
    public function guardar(Request $request)
{
    // Validar los datos
    $request->validate([
        'estudiante_id' => 'required',
        'horario_id' => 'required',
        'grado' => 'required',
        'año_ingreso' => 'required',
        'fecha_matricula' => 'required',
        'estado' => 'required',
    ]);

    // Guardar el estudiante
    Matricula::create($request->all());
    // Redireccionar a la lista de Estudiantes

    return redirect(route('matriculas'));
}

}
