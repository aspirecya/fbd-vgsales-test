<x-app-layout>
    <x-slot name="title">Tableau de bord</x-slot>
    <main class="flex flex-col min-h-screen p-32" role="main">
        <games-list :games="<?php echo htmlentities(json_encode($games->items())); ?>"></games-list>
        {{ $games->links('vendor.pagination.tailwind') }}
    </main>
</x-app-layout>
