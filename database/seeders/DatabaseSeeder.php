<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
      
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            RoleHasPermissionSeeder::class,
        ]);
        $user = User::create([
            'name' => 'AdminCat',
            'email' => 'admin@catlearn.com',
            'password' => ('catlearn'),
        ]);

        $user->assignRole('Admin');
    }
        
}
