<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Produk') }}

        </h2>
        
        
    </x-slot>
    <x-primary-button tag="a" href="{{ route('gudang.dashboard') }}">Kembali</x-primary-button>
    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-8 rounded shadow">
            <h1 class="text-2xl font-bold mb-6">Tambah Barang</h1>

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('gudang.store') }}" method="POST">
                @csrf

                <!-- Nama Produk -->
                <div class="mb-4">
                    <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" 
                           class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                           value="{{ old('nama_produk') }}">
                    @error('nama_produk')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Kategori -->
                <div class="mb-4">
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select name="kategori" id="kategori" 
                            class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ old('kategori') == $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                    @error('kategori')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                

                <!-- Harga -->
                <div class="mb-4">
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" step="0.01" name="harga" id="harga" 
                           class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                           value="{{ old('harga') }}">
                    @error('harga')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Stok -->
                <div class="mb-4">
                    <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                    <input type="number" name="stok" id="stok" 
                           class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                           value="{{ old('stok') }}">
                    @error('stok')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded hover:bg-indigo-600 focus:outline-none">
                    Tambah Barang
                </button>
            </form>
        </div>
    </div>

    

    
</x-app-layout>


