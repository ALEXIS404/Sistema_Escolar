<div>
    <x-header title="Asignaturas" />
    <x-section-header
        title=" "
        subtitle="Registrar los datos de Asignatura">

        <!-- Formulario -->
        <form wire:submit.prevent="guardar" >
            @csrf
            <div class=" grid grid-cols-2 gap-4">
            <!--Nombre-->
            <x-forms.form-input
                id="nombre"
                name="nombre"
                value="{{ $asignatura['nombre'] }}"
                label="Nombre"
                type="text"
            />

            <x-forms.form-input
            id="descripcion"
            name="descripcion"
            value="{{ $asignatura['nombre'] }}"
            label="Descripcion"
            type="text"
        />

            </div>
            <x-primary-button>
                Guardar
            </x-primary-button>
        </form>

    </x-section-header>

