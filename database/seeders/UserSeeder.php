<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; 
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'name' => 'Jayusman',
            'email' => 'jayusman@gmail.com',
            'roles' => 'Admin_Utama',
            'cabang' => '',
        ]);

        
    }
}
