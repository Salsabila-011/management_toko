<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stok Barang Cabang') }}
        </h2>
        <x-primary-button tag="a" href="{{ route('gudang.dashboard') }}">Kembali</x-primary-button>
    </x-slot>


    <div class="mt-10">
        <h2 class="text-2xl font-bold text-center text-white">Stok Produk</h2>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden text-center mt-4">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4 uppercase font-semibold text-sm">Produk</th>
                    <th class="py-3 px-4 uppercase font-semibold text-sm">Jumlah</th>
                    <th class="py-3 px-4 uppercase font-semibold text-sm">Harga</th>
                    <th class="py-3 px-4 uppercase font-semibold text-sm">Kategori</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $product)
                    <tr>
                        <td class="py-3 px-4">{{ $product->nama_produk }}</td>
                        <td class="py-3 px-4">{{ $product->stok }}</td>
                        <td class="py-3 px-4">{{ $product->harga }}</td>
                        <td class="py-3 px-4">{{ $product->kategori }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-3 px-4 text-gray-500">Tidak ada produk yang tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
