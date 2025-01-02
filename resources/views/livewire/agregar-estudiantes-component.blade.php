<div>
    <x-header title="Registro de un nuevo Estudiante" />
    <x-section-header
        title="Datos del Estudiante "
        subtitle="Ingrese toda la información para el registro de un nuevo Estudiante">

        <!-- Formulario -->
        <form method="post" action="{{ route('estudiantes.guardar') }}" >
            @csrf
            <div class=" grid grid-cols-2 gap-4">
            <!--Nombre-->
            <x-forms.form-input
                id="nombre"
                name="nombre"
                value=""
                label="Nombre"
                type="text"
            />

            <x-forms.form-input
                id="apellidos"
                name="apellidos"
                value=""
                label="Apellidos"
                type="text"
            />

            <x-forms.form-input
            id="direccion"
            name="direccion"
            value=""
            label="Dirección"
            type="text"
        />




            <x-forms.form-input
                id="fecha_nacimiento"
                name="fecha_nacimiento"
                value=""
                label="fecha de nacimiento"
                type="text"
            />


            <x-forms.form-select
            id="sexo"
            name="sexo"
            value=""
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

