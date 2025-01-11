<?php

namespace App\Livewire;

use App\Traits\Globalable;
use Livewire\Component;

class AgregarMatriculasComponent extends Component
{
    use Globalable;
    
    public function render()
    {
        return view('livewire.agregar-matriculas-component');
    }
}