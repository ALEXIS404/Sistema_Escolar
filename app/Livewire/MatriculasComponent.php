<?php

namespace App\Livewire;

use App\Models\Matricula;
use Livewire\Component;

class MatriculasComponent extends Component
{

    public bool $showModal = false;
    public int $matriculaId = 0;

    public function render()
    {
        return view('livewire.matriculas-component');
    }

    public function abrirModalParaEditar($id): void
    {
        $this->matriculaId = $id;
        $this->dispatch('open-modal', 'editar-matricula');
    }

    public function eliminarMatricula(): void
    {

        Matricula
        ::find($this->matriculaId)->delete();


        redirect(route('matriculas'));
    }


}
