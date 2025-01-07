<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stok Barang Cabang') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="container mx-auto mt-5"> 
            <h2 class="text-2xl font-bold text-center mb-5 text-gray-50">Detail Cabang</h2> 
            <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden"> 
                <div class="px-6 py-4"> 
                    <h3 class="text-xl font-semibold">{{ $branches->nama_cabang }}</h3> 
                    <p class="text-gray-700">ID Cabang: {{ $branches->cabang_id }}</p> 
                </div> 
                <div class="px-6 py-4 bg-gray-100 border-t"> 
                    <a href="{{ route('admin.branch') }}" class="text-blue-500 hover:text-blue-700">Kembali ke Daftar Cabang</a> 
                </div> 
            </div> 
        </div>
    </div>

    
</x-app-layout>
