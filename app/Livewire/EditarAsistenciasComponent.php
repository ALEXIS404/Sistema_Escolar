<?php

namespace App\Livewire;
use App\Models\Asistencia;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Traits\Globalable;

class EditarAsistenciasComponent extends Component
{
    use Globalable;
    
    public $asistencia;

    public function rules() {
        return [
            'asistencia.estudiante_id' => 'required',
            'asistencia.horario_id' => 'required',
            'asistencia.fecha' => 'required',
            'asistencia.asistencia' => 'required',



        ];
    }

    public function mount(): void
    {
        // Obtener el id de la ruta
        $id = Route::current()->parameter('id');
        $this->asistencia = Asistencia::find($id)->toArray();
    }

    public function render()
    {
        return view('livewire.editar-asistencias-component');
    }

    public function guardar(){
        $this->validate();

        Asistencia::find($this->asistencia['id'])->update($this->asistencia);

        return redirect()->route('asistencias');
    }
}
