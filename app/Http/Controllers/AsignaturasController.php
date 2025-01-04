<?php

namespace App\Http\Controllers;
use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturasController extends Controller
{
    //funcion para guardar una asignatura
public function guardar(Request $request)
{
    // Validar los datos
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',

    ]);
    // Guardar la Asignatura
    Asignatura::create($request->all());
    // Redireccionar a la lista de Estudiantes

    return redirect(route('asignaturas'));
}

}
