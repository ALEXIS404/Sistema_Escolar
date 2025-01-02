<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public array $sexoEstudiante = [
        1 => 'Femenino',
        2 => 'Masculino',
    ];

//funcion para guardar un Estudiante
public function guardar(Request $request)
{
    // Validar los datos
    $request->validate([
        'nombre' => 'required',
        'apellidos' => 'required',
        'sexo' => 'required',
        'direccion' => 'required',
        'fecha_nacimiento' => 'required',
    ]);
    // Guardar el estudiante
    Estudiante::create($request->all());
    // Redireccionar a la lista de Estudiantes

    return redirect(route('estudiantes'));
}

public function editar(Request $request, Estudiante $id)
{
    return view('livewire.editar-estudiantes-component', [
        'id' => $id,
        'sexoEstudiante' => $this->sexoEstudiante]
    );
}



}
