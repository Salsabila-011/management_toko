<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kasir') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Transaksi") }}
                    <!-- <x-primary-button tag="a" href="{{  route('transaksis.create')}}">Transaksi</x-primary-button> -->

                    <div class="container mx-auto mt-5">
                    <h1 class="text-xl font-bold mb-5">Daftar Transaksi</h1>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Produk</th>
                                <th class="px-4 py-2">Jumlah</th>
                                <th class="px-4 py-2">Harga</th>
                                <th class="px-4 py-2">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td class="border px-4 py-2">{{ $transaction->product->nama_produk }}</td>
                                <td class="border px-4 py-2">{{ $transaction->jumlah }}</td>
                                <td class="border px-4 py-2">Rp{{ number_format($transaction->harga, 2) }}</td>
                                <td class="border px-4 py-2">Rp{{ number_format($transaction->total_harga, 2) }}</td>
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
