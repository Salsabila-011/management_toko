<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->insert([
            [
                'cabang_id' => 'A1',
                'nama_cabang' => 'Jakarta',
            ],
            [
                'cabang_id' => 'B2',
                'nama_cabang' => 'Bandung',
            ],
            [
                'cabang_id' => 'C3',
                'nama_cabang' => 'Semarang',
            ],
            [
                'cabang_id' => 'D4',
                'nama_cabang' => 'Bali',
            ],
            [
                'cabang_id' => 'E5',
                'nama_cabang' => 'Lampung',
            ],
        ]);
    }
}
