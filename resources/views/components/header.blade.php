@props(['title'])

<x-slot name="header">
    <div class="flex items-center justify-between z-50">
        <h2 class="font-semibold text-xl text-blue-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>

        {{ $slot }}
    </div>
</x-slot>
