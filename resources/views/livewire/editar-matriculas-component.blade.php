<div>
    <x-header title="Modificando datos de la Matricula" />
    <x-section-header
        title="Datos del Estudiante "
        subtitle="Ingrese toda la información para el registro de una nueva Matricula">

        <!-- Formulario -->
        <form wire:submit.prevent="guardar" >
            @csrf
            <div class=" grid grid-cols-2 gap-4">
            <!--Nombre-->
            <x-forms.form-input
                id="estudiante_id"
                name="matricula.estudiante_id"
                value="{{ $matricula['estudiante_id'] }}"
                label="estudiante id"
                type="text"
            />
        

            <x-forms.form-input
                id="grado"
                name="matricula.grado"
                value="{{ $matricula['grado'] }}"
                label="Grado"
                type="text"
            />

            <x-forms.form-input
            id="año_ingreso"
            name="matricula.año_ingreso"
            value="{{ $matricula['año_ingreso'] }}"
            label="Año de ingreso"
            type="text"
        />



            <x-forms.form-input
                id="fecha_matricula"
                name="matricula.fecha_matricula"
                value="{{ $matricula['fecha_matricula'] }}"
                label="fecha de Matricula"
                type="date"
            />


            <x-forms.form-select
            id="estado"
            name="matricula.estado"
            value="{{ $matricula['estado'] }}"
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


