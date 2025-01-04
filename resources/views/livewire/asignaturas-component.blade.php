<div>
    <x-header title="Asignaturas" />
    <x-section-header
        title=" "
        subtitle="Registrar los datos de Asignatura">

        <!-- Formulario -->
        <form method="post" action="{{ route('asignaturas.guardar') }}" >
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
            id="descripcion"
            name="descripcion"
            value=""
            label="Descripcion"
            type="text"
        />

            </div>
            <x-primary-button>
                Guardar
            </x-primary-button>
        </form>

    </x-section-header>


    <div>
        <x-slot name="header">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Asignaturas
                </h2>



            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <livewire:Asignaturas-table />
                    </div>
                </div>
            </div>
        </div>


    </div>


    <x-modal name="editar-asignatura" :show="$asignaturaId" focusable>
        <div class="p-4">
            <h1 class="-m-4 p-4 bg-red-100 text-red-600 font-bold">¿Estás seguro de que quieres eliminar la Asignatura?</h1>

            <section>
                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        Cancelar
                    </x-secondary-button>

                    <x-danger-button class="ms-3" wire:click="eliminarAsignatura">
                        Eliminar
                    </x-danger-button>
                </div>
            </section>
        </div>
    </x-modal>



</div>


