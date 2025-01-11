<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Matricula;

class MatriculasTable extends DataTableComponent
{
    protected $model = Matricula::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Estudiante id", "estudiante_id")
                ->sortable(),
            Column::make("Grado", "grado")
                ->sortable(),
            Column::make("Año ingreso", "año_ingreso")
                ->sortable(),
            Column::make("Fecha matricula", "fecha_matricula")
                ->sortable(),
            Column::make("Estado", "estado") ->sortable(),

            //Column::make("Created at", "created_at")->sortable(),
            //Column::make("Updated at", "updated_at")->sortable(),
            Column::make('id')->format(fn ($value, $row, Column $column) => view('livewire.acciones.acciones.matriculas')->withValue($value))

        ];
    }
}
