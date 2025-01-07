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
        $faker = Faker::Create('id_ID');
        for ($i=0; $i < 50; $i++){
            $kategoriTshirt = [ 'Kaos Polos', 'T-shirt Grafis', 'Kaos V-neck', 'Kaos Lengan Panjang', 'Kaos Raglan', 'T-shirt Oversized', 'Kaos Tie-dye', 'Kaos Henley' ]; 
            $kategoriKemeja = [ 'Kemeja Flanel', 'Kemeja Batik', 'Kemeja Denim', 'Kemeja Kotak-kotak', 'Kemeja Lengan Pendek', 'Kemeja Oxford', 'Kemeja Formal', 'Kemeja Kasual' ]; 
            $kategoriCelana = [ 'Celana Jeans', 'Celana Chino', 'Celana Pendek', 'Celana Jogger', 'Celana Kargo', 'Celana Kulot', 'Celana Legging', 'Celana Formal' ]; 
            $kategoriRok = [ 'Rok Mini', 'Rok Midi', 'Rok Maxi', 'Rok A-line', 'Rok Plisket', 'Rok Span', 'Rok Tutu', 'Rok Denim' ];
            
            $kategori = $faker->randomElement(['T-shirt', 'Kemeja', 'Celana', 'Rok']); 
            $nama_produk = '';

            switch ($kategori) { 
                case 
                'T-shirt': $nama_produk = $faker->randomElement($kategoriTshirt); 
                break; 
                case 
                'Kemeja': $nama_produk = $faker->randomElement($kategoriKemeja); 
                break; 
                case 
                'Celana': $nama_produk = $faker->randomElement($kategoriCelana); 
                break; 
                case 
                'Rok': $nama_produk = $faker->randomElement($kategoriRok); 
                break; 
            }
            $id = ['A1','B2','C3','C5','D4'];
            DB::table('products')->insert([

                'nama_produk' => $nama_produk,
                'kategori' => $kategori,
                'harga' => $faker->randomFloat(2, 1000, 100000),
                'stok' => $faker->numberBetween(1, 100),
                'cabang_id'=> $faker->randomElement($id),

            ]);
        }
    }
}
