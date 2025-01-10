<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stok Barang Cabang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto mt-5"> 
            <h2 class="text-2xl font-bold text-center mb-5 text-white">Detail Cabang</h2> 
            <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden"> 
                <div class="px-6 py-4"> 
                    <h3 class="text-xl font-semibold">{{ $branches->nama_cabang }}</h3> 
                    <p class="text-gray-700">ID Cabang: {{ $branches->cabang_id }}</p> 
                </div> 
                <div class="px-6 py-4 bg-gray-100 border-t"> 
                    <a href="{{ route('admin.branch') }}" class="text-blue-500 hover:text-blue-700">Kembali ke Daftar Cabang</a> 
                </div>
                
                <div class="px-6 py-4 bg-gray-100 border-t"> 
                    @php
                    $id = $branches->cabang_id;
                    @endphp
                    <a href="{{ route('admin.orders.pdf',$id) }}" class="text-blue-500 hover:text-blue-700">Print Data Transaksi</a> 
                </div> 
                
            </div>
            <div class="mt-10">
        <h2 class="text-2xl font-bold text-center text-white">Detail Produk</h2>
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
    <div class="py-4"></div>
    <h2 class="text-2xl font-bold text-center text-white">Transaksi</h2>
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
            @foreach($transaksis as $transaksi)
                <tr class="border-b border-gray-300 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $transaksi->id }}</td>
                    <td class="py-3 px-6 text-left">{{ $transaksi->product_id }}</td>
                    <td class="py-3 px-6 text-left">{{ $transaksi->jumlah }}</td>
                    <td class="py-3 px-6 text-left">{{ number_format($transaksi->harga, 2) }}</td>
                    <td class="py-3 px-6 text-left">{{ number_format($transaksi->total_harga, 2) }}</td>
                    <td class="py-3 px-6 text-left">{{ $transaksi->cabang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>

    
</x-app-layout>
