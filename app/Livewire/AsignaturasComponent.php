<?php

namespace App\Livewire;

use App\Models\Asignatura;
use Livewire\Component;

class AsignaturasComponent extends Component
{

    public bool $showModal = false;
    public int $asignaturaId = 0;


    public function render()
    {
        return view('livewire.asignaturas-component');
    }

    public function abrirModalParaEditar($id): void
    {
        $this->asignaturaId = $id;
        $this->dispatch('open-modal', 'editar-asignatura');
    }

    public function eliminarAsignatura(): void
    {

        Asignatura::find($this->asignaturaId)->delete();

        redirect(route('asignaturas'));
    }
}

