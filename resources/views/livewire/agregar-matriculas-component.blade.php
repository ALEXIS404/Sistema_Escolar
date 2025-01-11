<div>
    <x-header title="Registro de un nuevo Estudiante" />
    <x-section-header
        title="Datos del Estudiante "
        subtitle="Ingrese toda la información para el registro de una nueva matricula">

        <!-- Formulario -->
        <form method="post" action="{{ route('matriculas.guardar') }}" >
            @csrf
            <div class=" grid grid-cols-2 gap-4">
            <!--Nombre-->
            <x-forms.form-input
                id="estudiante_id"
                name="estudiante_id"
                value=""
                label="estudiante id"
                type="text"
            />
            

            <x-forms.form-input
                id="grado"
                name="grado"
                value=""
                label="Grado"
                type="text"
            />

            <x-forms.form-input
            id="año_ingreso"
            name="año_ingreso"
            value=""
            label="Año de ingreso"
            type="text"
        />




            <x-forms.form-input
                id="fecha_matricula"
                name="fecha_matricula"
                value=""
                label="fecha de Matricula"
                type="date"
            />


            <x-forms.form-select
            id="estado"
            name="estado"
            value=""
            label="Estado"
            :data="$estadoMatricula"
        >

        </x-forms.form-select>


            </div>


            <x-primary-button>
                Guardar
            </x-primary-button>
        </form>

    </x-section-header>
</div>

