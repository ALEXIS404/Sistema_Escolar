<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card bg-white dark:bg-gray-800">
                <div class="card-body grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
                    <div class="text-gray-900 dark:text-gray-100">
                        <h2 class="text-xl font-semibold mb-4">Misión</h2>
                        <p>Formar integralmente a los estudiantes, cultivando sus capacidades intelectuales, sociales y éticas para que sean ciudadanos comprometidos con su entorno.</p>
                    </div>
                    <div class="text-gray-900 dark:text-gray-100">
                        <h2 class="text-xl font-semibold mb-4">Visión</h2>
                        <p>Ser una institución educativa líder, reconocida por su excelencia académica, innovación pedagógica y la formación de líderes transformadores.</p>
                    </div>
                    <div class="text-gray-900 dark:text-gray-100">
                        <h2 class="text-xl font-semibold mb-4">Valores</h2>
                        <ul class="list-disc pl-6">
                            <li>Responsabilidad</li>
                            <li>Respeto</li>
                            <li>Excelencia</li>
                            <li>Compromiso</li>
                        </ul>
                    </div>
                    <div class="md:col-span-2 flex justify-center items-center">
                        <a href="https://www.google.com/maps/place/Universidad+Martin+Lutero+Sede+Ocotal/@13.6459586,-86.4660941,17z/data=!3m1!4b1!4m6!3m5!1s0x8f6e1b08c1eed2f7:0x134a07bd42dd8129!8m2!3d13.6459534!4d-86.4635192!16s%2Fg%2F11c58mnqqf?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                            <img src="https://imgs.search.brave.com/f_Xc95renYNB81p6TtWMZCmTOgDvytr3gpvoMG5gZ0c/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9vY290/YWwudW1sLmVkdS5u/aS93cC1jb250ZW50/L3VwbG9hZHMvMjAy/Mi8xMi9CbGFuY28t/UE5HLnBuZw" alt="Fachada del Colegio" class="max-w-md h-auto rounded-lg shadow-md hover:scale-105 transition duration-300">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
