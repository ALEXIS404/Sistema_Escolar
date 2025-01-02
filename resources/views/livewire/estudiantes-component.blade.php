<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Lista de Estudiantes
            </h2>

            <x-link-button class="z-50" :href="route('estudiantes.agregar')">
                Nuevo Estudiante
        </x-link-button>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livewire:Estudiantes-table />
                </div>
            </div>
        </div>
    </div>

    <x-modal name="editar-estudiante" :show="$estudianteId" focusable>
        <div class="p-4">
            <h1 class="-m-4 p-4 bg-red-100 text-red-600 font-bold">¿Estás seguro de eliminar al estudiante?</h1>

            <section>
                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        Cancelar
                    </x-secondary-button>

                    <x-danger-button class="ms-3" wire:click="eliminarEstudiante">
                        Eliminar
                    </x-danger-button>
                </div>
            </section>
        </div>
    </x-modal>

</div>
