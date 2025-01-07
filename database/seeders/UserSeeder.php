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
        // $admin = Role::where('name', 'Admin_Utama')->first();
        // User::factory()->create([
        //     // 'name' => 'Jayusman',
        //     // 'email' => 'jayusman05@gmail.com',
        // ])->assignRole($admin);

        
    }
}
