<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div id="root"></div>
    @vite(['resources/js/main.tsx'])
</x-layout>
