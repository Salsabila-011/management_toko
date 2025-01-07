<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permission::create(['name' => 'manage_users']); 
        // Permission::create(['name' => 'manage_products']); 
        // Permission::create(['name' => 'view_sales']); 
        
        
        // $admin = Role::create(['name' => 'Admin_Utama']); 
        // $admin->givePermissionTo(['manage_users', 'manage_products', 'view_sales']); 
        
        // $manager = Role::create(['name' => 'Manajer_Toko']); 
        // $manager->givePermissionTo(['manage_products', 'view_sales']); 
        
        // $supervisor = Role::create(['name' => 'Supervisor']); 
        // $supervisor->givePermissionTo('view_sales'); 
        
        // $cashier = Role::create(['name' => 'Kasir']); 
        
        // $warehouse = Role::create(['name' => 'Pegawai_Gudang']); 
        // $warehouse->givePermissionTo('manage_products');
    }
}
