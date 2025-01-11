<?php

namespace App\Livewire;
use App\Models\Matricula;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Traits\Globalable;

class EditarMatriculasComponent extends Component
{
    use Globalable;
    public $matricula;

    public function rules() {
        return [
            'matricula.estudiante_id' => 'required',
            'matricula.grado' => 'required',
            'matricula.año_ingreso' => 'required',
            'matricula.fecha_matricula' => 'required',
            'matricula.estado' => 'required',


        ];
    }

    public function mount(): void
    {
        // Obtener el id de la ruta
        $id = Route::current()->parameter('id');
        $this->matricula = Matricula::find($id)->toArray();
    }

    public function render()
    {
        return view('livewire.editar-matriculas-component');
    }

    public function guardar(){
        $this->validate();

        Matricula::find($this->matricula['id'])->update($this->matricula);

        return redirect()->route('matriculas');
    }
}
