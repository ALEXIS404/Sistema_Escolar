<?php

namespace App\Livewire;
use App\Models\Estudiante;
use App\Traits\Globalable;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class EstudiantesTable extends DataTableComponent
{
    use Globalable;

    protected $model = Estudiante::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("id", "id")
                ->sortable(),
            Column::make("Nombre", "nombre")
                ->sortable(),
            Column::make("Apellidos", "apellidos")
                ->sortable(),
            Column::make("Sexo", "sexo")->format(fn ($value, $row, Column $column)  => $this->sexoEstudiante[$value]),

            Column::make("Direccion", "direccion")->sortable(),
           // Column::make("Fecha nacimiento", "fecha_nacimiento")->sortable(),
            //Column::make("Created at", "created_at") ->sortable(),
           // Column::make("Updated at", "updated_at") ->sortable(),
           Column::make('id')->format(fn ($value, $row, Column $column) => view('livewire.acciones.estudiantes.acciones')->withValue($value))

        ];
    }
}
