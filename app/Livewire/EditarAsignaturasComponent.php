<?php

namespace App\Livewire;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Route;
use Livewire\Component;


class EditarAsignaturasComponent extends Component
{

    public $asignatura;

    public function rules() {
        return [
            'asignatura.nombre' => 'required',
            'asignatura.descripcion' => 'required',

        ];
    }
    public function mount(): void
    {
        // Obtener el id de la ruta
        $id = Route::current()->parameter('id');
        $this->asignatura = Asignatura::find($id)->toArray();
    }


    public function render()
    {
        return view('livewire.editar-asignaturas-component');
    }

    public function guardar(){
        $this->validate();

        Asignatura::find($this->asignatura['id'])->update($this->asignatura);

        return redirect()->route('asignaturas');
    }
}
