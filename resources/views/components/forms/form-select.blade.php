@props(['id', 'name', 'data', 'value', 'label'])
<div class="border border-gray-100 p-2 shadow-lg mb-2 rounded-lg">
    <x-input-label for="{{$name}}" value="{{$label}}" />
    <select class="w-full rounded-md"
            wire:model="{{$name}}"
            id="{{$id}}"
            name="{{$name}}"
    >
        <option value="">Seleccione una opción</option>
        @foreach($data as $id => $texto)
            <option @selected($id == $value) value="{{$id}}">{{$texto}}</option>
        @endforeach
    </select>
    <x-input-error class="mt-2" :messages="$errors->get($name)" />
</div>
