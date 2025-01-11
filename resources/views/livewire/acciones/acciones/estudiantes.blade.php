
<x-link-button :href="route('estudiantes.editar', ['id' => $value])" >
    Editar
</x-link-button>

<x-danger-button wire:click="$parent.abrirModalParaEditar({{$value}})">
    Eliminar
</x-danger-button>
