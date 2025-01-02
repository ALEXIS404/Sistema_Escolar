<?php

namespace App\Livewire;
use App\Models\Estudiante;
use Livewire\Component;
class EstudiantesComponent extends Component
{

    public bool $showModal = false;
    public int $estudianteId = 0;

    public function render()
    {
        return view('livewire.estudiantes-component');
    }

    public function abrirModalParaEditar($id): void
    {
        $this->estudianteId = $id;
        $this->dispatch('open-modal', 'editar-estudiante');
    }

    public function eliminarEstudiante(): void
    {
        // Buscar el Estudiante en la base de datos y eliminarlo
        Estudiante::find($this->estudianteId)->delete();

        // Recargar la tabla de Estudiantes
        redirect(route('estudiantes'));
    }
}
