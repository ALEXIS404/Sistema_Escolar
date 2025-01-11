<?php

namespace App\Livewire;
use App\Models\Asistencia;
use Livewire\Component;

class AsistenciasComponent extends Component
{

    public bool $showModal = false;
    public int $asistenciaId = 0;

    public function render()
    {
        return view('livewire.asistencias-component');
    }

    public function abrirModalParaEditar($id): void
    {
        $this->asistenciaId = $id;
        $this->dispatch('open-modal', 'editar-asistencia');
    }

    public function eliminarEstudiante(): void
    {

        Asistencia::find($this->asistenciaId)->delete();

        // Recargar la tabla de Estudiantes
        redirect(route('asistencias'));
    }
}
