<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Asistencia;

class AsistenciasTable extends DataTableComponent
{
    protected $model = Asistencia::class;

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
            Column::make("Horario id", "horario_id")
                ->sortable(),
            Column::make("Fecha", "fecha")
                ->sortable(),
            Column::make("Asistencia", "asistencia")
                ->sortable(),
           // Column::make("Created at", "created_at")   ->sortable(),
            //Column::make("Updated at", "updated_at") ->sortable(),

            Column::make('id')->format(fn ($value, $row, Column $column) => view('livewire.acciones.acciones.asistencias')->withValue($value))


        ];
    }
}
