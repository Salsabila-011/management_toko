<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manager Dashboard') }}

        </h2>
        
        <h1 class="text-white">Cabang: {{ $user }}</h1>
    </x-slot>
    <x-primary-button tag="a" href="{{ route('manager.transaksi') }}">Cek Transaksi Cabang</x-primary-button>

    

    
</x-app-layout>
