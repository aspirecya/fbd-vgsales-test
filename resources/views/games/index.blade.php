<x-app-layout>
    @section('title', 'List')
    <main class="flex flex-col min-h-screen" role="main">
        <games-list :games="<?php echo htmlentities(json_encode($games->items())); ?>"></games-list>
        {{ $games->links('vendor.pagination.tailwind') }}
    </main>
</x-app-layout>
