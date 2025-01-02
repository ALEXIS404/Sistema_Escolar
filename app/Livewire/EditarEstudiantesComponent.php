<?php

namespace App\Livewire;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Traits\Globalable;

class EditarEstudiantesComponent extends Component
{
    use Globalable;

    public $estudiante;

    public function rules() {
        return [
            'estudiante.nombre' => 'required',
            'estudiante.apellidos' => 'required',
            'estudiante.direccion' => 'required',
            'estudiante.fecha_nacimiento' => 'required',
            'estudiante.sexo' => 'required',

        ];
    }

    public function mount(): void
    {
        // Obtener el id de la ruta
        $id = Route::current()->parameter('id');
        $this->estudiante = Estudiante::find($id)->toArray();
    }
    public function render()
    {
        return view('livewire.editar-estudiantes-component');
    }

    public function guardar(){
        $this->validate();

        Estudiante::find($this->estudiante['id'])->update($this->estudiante);

        return redirect()->route('estudiantes');
    }
}
