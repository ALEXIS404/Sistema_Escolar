<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciasController extends Controller
{


    public function guardar(Request $request)
{
    // Validar los datos
    $request->validate([
        'estudiante_id' => 'required',
        'horario_id' => 'required',
        'fecha' => 'required',
        'asistencia' => 'required',

    ]);


    Asistencia::create($request->all());


    return redirect(route('asistencias'));
}


}
