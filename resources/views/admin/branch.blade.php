<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cabang Toko') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Cabang") }}
                    <p></p>
                    <x-primary-button tag="a" href="{{ route('admin.dashboard') }}">
                        kembali
                    </x-primary-button>
                    <div class="container mx-auto mt-5"> 
                        <h2 class="text-2xl font-bold text-center mb-5">Daftar Cabang</h2> 
                        <div class="overflow-x-auto"> 
                            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden text-center"> 
                                <thead class="bg-gray-800 text-white"> 
                                    <tr> 
                                        <th class="py-3 px-4 uppercase font-semibold text-sm">ID Cabang</th> 
                                        <th class="py-3 px-4 uppercase font-semibold text-sm">Nama Cabang</th> 
                                        <th class="py-3 px-4 uppercase font-semibold text-sm">Detail</th> 
                                    </tr> 
                                </thead> 
                                <tbody class="text-gray-700 "> 
                                    @foreach($branches as $branch) 
                                    <tr class="bg-gray-700 border-b border-gray-800 text-slate-100"> 
                                        <td class="py-3 px-4">{{ $branch->cabang_id }}</td> 
                                        <td class="py-3 px-4">{{ $branch->nama_cabang }}</td> 
                                        <td class="py-3 px-4"> 
                                            <a href="{{ route('admin.show', $branch->cabang_id) }}" class="text-blue-500 hover:text-blue-700">Lihat Detail</a> 
                                        </td> 
                                    </tr> 
                                    @endforeach 
                                </tbody> 
                            </table> 
                            <div class="container mx-auto mt-5">
                                <form method="GET" action="{{ route('admin.branch') }}" class="mb-5">
                                    <select name="kategori" class="border rounded p-2 text-black" onchange="this.form.submit()">
                                        <option value="" >Pilih Kategori</option>
                                        <option value="T-shirt" {{ request('kategori') == 'T-shirt' ? 'selected' : '' }}>T-shirt</option>
                                        <option value="Kemeja" {{ request('kategori') == 'Kemeja' ? 'selected' : '' }}>Kemeja</option>
                                        <option value="Celana" {{ request('kategori') == 'Celana' ? 'selected' : '' }}>Celana</option>
                                        <option value="Rok" {{ request('kategori') == 'Rok' ? 'selected' : '' }}>Rok</option>
                                    </select>
                                </form>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    @foreach ($products as $product)
                                    <div class="border rounded p-4">
                                        <h2 class="font-bold text-lg">{{ $product->nama_produk }}</h2>
                                        <p>Kategori: {{ $product->kategori }}</p>
                                        <p>Harga: Rp{{ number_format($product->harga, 2) }}</p>
                                        <p>Stok: {{ $product->stok }}</p>
                                        <p>Cabang: {{$product->cabang_id}}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> 
                    </div>


                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
