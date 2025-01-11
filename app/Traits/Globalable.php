<?php

namespace App\Traits;

trait Globalable
{
    public array $sexoEstudiante = [
        1 => 'Femenino',
        2 => 'Masculino',
    ];

    public array $estadoMatricula =[
        1 => 'Activa',
        2 => 'Inactiva',
    ];

    public array $asistenciaEstudiante =[
        1 => 'Presente',
        2 => 'Aucente',
        2 => 'Justicado',
    ];

}
