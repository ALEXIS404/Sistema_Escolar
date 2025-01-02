@props(['id', 'name', 'type', 'value', 'label','required' => true])
<div class="border border-gray-100 p-2 shadow-lg mb-2 rounded-lg">
    <x-input-label for="{{$name}}" value="{{$label}}" />
    <x-text-input
        wire:model="{{$name}}"
        id="{{$id}}"
        name="{{$name}}"
        type="{{$type}}"
        class="mt-1 block w-full"
        value="{{$value}}"
        required="{{$required}}"
        autofocus
        autocomplete="{{$name}}"
    />
    <x-input-error class="mt-2" :messages="$errors->get($name)" />
</div>
