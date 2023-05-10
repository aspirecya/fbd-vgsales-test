<x-app-layout>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">VG Sales</h2>
            <div class="mx-auto max-w-2xl lg:max-w-none">
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Trusted by gaming companies worldwide</h2>
                    <p class="mt-4 text-lg leading-8 text-gray-600">Whatever game information and metrics you need, we got it.</p>
                </div>
                <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-5">
                    <div class="flex flex-col bg-gray-400/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Games on the platform</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ $totalGames }}</dd>
                    </div>
                    <div class="flex flex-col bg-gray-400/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Global games sales (in millions)</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ $totalGlobalSales }}</dd>
                    </div>
                    <div class="flex flex-col bg-gray-400/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Global EU sales (in millions)</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ $totalEuSales }}</dd>
                    </div>
                    <div class="flex flex-col bg-gray-400/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Global NA sales (in millions)</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ $totalNaSales }}</dd>
                    </div>
                    <div class="flex flex-col bg-gray-400/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Global JP sales (in millions)</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">{{ $totalJpSales }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-app-layout>
