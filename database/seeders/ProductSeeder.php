<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $kategoriTshirt = ['Kaos Polos', 'T-shirt Grafis', 'Kaos V-neck']; 
        $kategoriKemeja = ['Kemeja Flanel', 'Kemeja Batik', 'Kemeja Denim']; 
        $kategoriCelana = ['Celana Jeans', 'Celana Chino', 'Celana Pendek']; 
        $kategoriRok = ['Rok Mini', 'Rok Midi', 'Rok Maxi'];
        $kategoriProduk = [ 
            'T-shirt' => $kategoriTshirt, 
            'Kemeja' => $kategoriKemeja, 
            'Celana' => $kategoriCelana, 
            'Rok' => $kategoriRok, ]; 
        $cabangIds = ['A1', 'B2', 'C3', 'D4', 'E5']; 
        foreach ($cabangIds as $cabangId) 
        { 
            foreach ($kategoriProduk as $kategori => $produkList) 
            { 
                foreach ($produkList as $namaProduk) 
                { 
                    DB::table('products')->insert([ 
                        'nama_produk' => $namaProduk, 
                        'kategori' => $kategori, 
                        'harga' => $faker->randomFloat(2, 1000, 100000), 
                        'stok' => $faker->numberBetween(1, 100), 
                        'cabang_id' => $cabangId, 
                    ]); 
                } 
            } 
        }
    }
}
