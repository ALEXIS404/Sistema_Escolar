<div>
    <x-header title="Modificando datos de la Asistencia" />
    <x-section-header
        title="Datos para la Asistencia "
        subtitle="Ingrese toda la información para el registro de una nueva Asistencia">

        <!-- Formulario -->
        <form wire:submit.prevent="guardar" >
            @csrf
            <div class=" grid grid-cols-2 gap-4">
            <!--Nombre-->
            <x-forms.form-input
                id="estudiante_id"
                name="asistencia.estudiante_id"
                value="{{ $asistencia['estudiante_id'] }}"
                label="Estudiante id"
                type="text"
            />

            <x-forms.form-input
                id="horario_id"
                name="asistencia.horario_id"
                value="{{ $asistencia['horario_id'] }}"
                label="Horario id"
                type="text"
            />

            <x-forms.form-input
            id="fecha"
            name="asistencia.fecha"
            value="{{ $asistencia['fecha'] }}"
            label="Fecha"
            type="text"
        />
        <x-forms.form-input
        id="asistencia"
        name="asistencia.asistencia"
        value="{{ $asistencia['asistencia'] }}"
        label="Asistencia"
        type="text"
    />

   


            </div>


            <x-primary-button>
                Guardar
            </x-primary-button>
        </form>

    </x-section-header>
</div>

