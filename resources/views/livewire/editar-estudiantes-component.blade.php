<div>
    <x-header title="Modificando datos del Estudiante" />
    <x-section-header
        title="Datos del Estudiante "
        subtitle="Ingrese toda la información para el registro de un nuevo Estudiante">

        <!-- Formulario -->
        <form wire:submit.prevent="guardar" >
            @csrf
            <div class=" grid grid-cols-2 gap-4">
            <!--Nombre-->
            <x-forms.form-input
                id="nombre"
                name="nombre"
                value="{{ $estudiante['nombre'] }}"
                label="Nombre"
                type="text"
            />

            <x-forms.form-input
                id="apellidos"
                name="apellidos"
                value="{{ $estudiante['apellidos'] }}"
                label="Apellidos"
                type="text"
            />

            <x-forms.form-input
            id="direccion"
            name="direccion"
            value="{{ $estudiante['direccion'] }}"
            label="Dirección"
            type="text"
        />




            <x-forms.form-input
                id="fecha_nacimiento"
                name="fecha nacimiento"
                value="{{ $estudiante['fecha_nacimiento'] }}"
                label="fecha de nacimiento"
                type="text"
            />


            <x-forms.form-select
            id="sexo"
            name="sexo"
            value="{{ $estudiante['sexo'] }}"
            label="Genero"
            :data="$sexoEstudiante"
        >

        </x-forms.form-select>


            </div>


            <x-primary-button>
                Guardar
            </x-primary-button>
        </form>

    </x-section-header>
</div>

