<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manager') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Transaksi") }}
                    <x-primary-button tag="a" href="{{  route('manager.dashboard')}}">Kembali</x-primary-button>

                    <div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Orders for Cabang: {{ $orders->first()->cabang ?? 'N/A' }}</h1>

    <table class="min-w-full bg-white border border-gray-300 text-center">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">ID</th>
                <th class="py-3 px-6 text-left">Product ID</th>
                <th class="py-3 px-6 text-left">Jumlah</th>
                <th class="py-3 px-6 text-left">Harga</th>
                <th class="py-3 px-6 text-left">Total Harga</th>
                <th class="py-3 px-6 text-left">Cabang</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach($orders as $order)
                <tr class="border-b border-gray-300 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $order->id }}</td>
                    <td class="py-3 px-6 text-left">{{ $order->product_id }}</td>
                    <td class="py-3 px-6 text-left">{{ $order->jumlah }}</td>
                    <td class="py-3 px-6 text-left">{{ number_format($order->harga, 2) }}</td>
                    <td class="py-3 px-6 text-left">{{ number_format($order->total_harga, 2) }}</td>
                    <td class="py-3 px-6 text-left">{{ $order->cabang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
