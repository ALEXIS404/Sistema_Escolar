<div class="p-4 max-w-lg mx-auto bg-white shadow rounded">
    @if (session()->has('message'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="nombre" class="block font-bold text-gray-700">Nombre:</label>
            <input type="text" id="nombre" wire:model="nombre" class="w-full border-gray-300 rounded focus:ring focus:ring-indigo-200">
            @error('nombre') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="apellidos" class="block font-bold text-gray-700">Apellidos:</label>
            <input type="text" id="apellidos" wire:model="apellidos" class="w-full border-gray-300 rounded focus:ring focus:ring-indigo-200">
            @error('apellidos') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="sexo" class="block font-bold text-gray-700">Sexo:</label>
            <select id="sexo" wire:model="sexo" class="w-full border-gray-300 rounded focus:ring focus:ring-indigo-200">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
            @error('sexo') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="direccion" class="block font-bold text-gray-700">Dirección:</label>
            <textarea id="direccion" wire:model="direccion" class="w-full border-gray-300 rounded focus:ring focus:ring-indigo-200"></textarea>
            @error('direccion') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="fecha_nacimiento" class="block font-bold text-gray-700">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" wire:model="fecha_nacimiento" class="w-full border-gray-300 rounded focus:ring focus:ring-indigo-200">
            @error('fecha_nacimiento') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">Guardar</button>
    </form>
</div>
