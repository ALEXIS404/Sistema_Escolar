<?php

namespace App\Livewire;
use App\Models\Asignatura;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;


class AsignaturasTable extends DataTableComponent
{
    protected $model = Asignatura::class;

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
            Column::make("Descripcion", "descripcion")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),

                Column::make('id')->format(fn ($value, $row, Column $column) => view('livewire.acciones.acciones.asignaturas')->withValue($value))


        ];
    }
}


