<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Estudiante;

class EstudiantesTable extends DataTableComponent
{
    protected $model = Estudiante::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "nombre")
                ->sortable(),
            Column::make("Apellidos", "apellidos")
                ->sortable(),
            Column::make("Sexo", "sexo")
                ->sortable(),
            Column::make("Direccion", "direccion")
                ->sortable(),
            Column::make("Fecha nacimiento", "fecha_nacimiento")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
