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
                            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden"> 
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
                                            <a href="{{ route('branch.show', $branch->cabang_id) }}" class="text-blue-500 hover:text-blue-700">Lihat Detail</a> 
                                        </td> 
                                    </tr> 
                                    @endforeach 
                                </tbody> 
                            </table> 
                        </div> 
                    </div>


                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
