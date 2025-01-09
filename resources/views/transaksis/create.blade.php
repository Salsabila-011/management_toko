<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto mt-5">
                        <h1 class="text-xl font-bold mb-5">Tambah Transaksi</h1>
                        <form action="{{ route('transaksis.store') }}" method="POST" class="w-full max-w-sm">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="product_id">
                                    Produk
                                </label>
                                <select name="product_id" id="product_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->nama_produk }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="jumlah">
                                    Jumlah
                                </label>
                                <input type="number" name="jumlah" id="jumlah" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Tambah Transaksi
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
