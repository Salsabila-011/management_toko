<x-app-layout>
<div class="container mx-auto px-4 py-6">
    <div class="text-lg font-bold mb-4">Supervisor</div>
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex justify-between items-center border-b pb-4 mb-4">
            <h2 class="text-xl font-semibold">Daftar Transaksi</h2>
            <button class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-700">
                TRANSAKSI
            </button>
        </div>
        <table class="min-w-full bg-white border border-gray-300 text-center">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">ID</th>
                <th class="py-3 px-6 text-left">Nama Product </th>
                <th class="py-3 px-6 text-left">Kategori</th>
                <th class="py-3 px-6 text-left">Harga</th>
                <th class="py-3 px-6 text-left">Stok</th>
                <th class="py-3 px-6 text-left">Cabang ID</th>

            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach($products as $product)
                <tr class="border-b border-gray-300 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $product->id }}</td>
                    <td class="py-3 px-6 text-left">{{ $product->nama_product }}</td>
                    <td class="py-3 px-6 text-left">{{ $product->kategori }}</td>
                    <td class="py-3 px-6 text-left">{{ number_format($product->harga, 2) }}</td>
                    <td class="py-3 px-6 text-left">{{ number_format($product->stok, 2) }}</td>
                    <td class="py-3 px-6 text-left">{{ $product->cabang_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>

</x-app-layout>

