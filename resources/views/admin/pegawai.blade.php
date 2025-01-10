<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Pegawai') }}
        </h2>
    </x-slot>
    <div class="container mx-auto py-8"> 
        <h1 class="text-2xl font-bold mb-6 text-white">Daftar Pegawai</h1> 
        <x-primary-button tag="a" href="{{ route('registrasi.index') }}">Tambah Pegawai</x-primary-button>
        <x-primary-button tag="a" href="{{ route('admin.dashboard') }}">Kembali</x-primary-button>
        <table class="min-w-full bg-white text-center"> 
            <thead class="bg-gray-800 text-white"> 
                <tr> 
                    <th class="w-1/4 py-3">Nama</th> 
                    <th class="w-1/4 py-3">Email</th> 
                    <th class="w-1/4 py-3">Roles</th> 
                    <th class="w-1/4 py-3">Cabang</th>
                    <th class="w-1/5 py-3">Aksi</th> 
                </tr> 
            </thead> 
            <tbody class="text-gray-700"> 
                @foreach($users as $pegawai) 
                <tr> 
                    <td class="w-1/4 py-3">{{ $pegawai->name }}</td> 
                    <td class="w-1/4 py-3">{{ $pegawai->email }}</td> 
                    <td class="w-1/4 py-3">{{ $pegawai->roles }}</td> 
                    <td class="w-1/4 py-3">{{ $pegawai->branch ? $pegawai->branch->nama_cabang : '' }}</td>
                    <td class="flex space-x-2 py-3 px-2">
                         <a href="{{ route('admin.edit', $pegawai->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a> 
                    <form action="{{ route('admin.destroy', $pegawai->id) }}" method="POST" class="inline">
                         @csrf 
                         @method('DELETE') 
                         <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?')">Hapus</button> 
                        </form> 
                    </td> 
                </tr> 
                @endforeach 
            </tbody> 
        </table> 
    </div>

    
    
</x-app-layout>
