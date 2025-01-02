<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class EstudianteForm extends Component
{
    public $nombre;
    public $apellidos;
    public $sexo = 'masculino';
    public $direccion;
    public $fecha_nacimiento;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'apellidos' => 'required|string|max:255',
        'sexo' => 'required|in:masculino,femenino',
        'direccion' => 'nullable|string|max:500',
        'fecha_nacimiento' => 'required|date|before:today',
    ];

    public function save()
    {
        $this->validate();

        Estudiante::create([
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'sexo' => $this->sexo,
            'direccion' => $this->direccion,
            'fecha_nacimiento' => $this->fecha_nacimiento,
        ]);

        session()->flash('message', 'Estudiante creado exitosamente.');
        $this->reset(); // Limpia los campos del formulario
    }

    public function render()
    {
        return view('livewire.Estudiante-Form');
    }
}
