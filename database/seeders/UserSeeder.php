<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
             'email' => 'Admin@teste.com',
              'password' => Hash::make('12345678'),
             'role' => 'admin'
         ]);
 
         User::create([
             'name' => 'cliente',
             'email' => 'cliente@teste.com',
             'password' => Hash::make('12345678'),
             'role' => 'cliente'
         ]);
 
         User::create([
             'name' => 'funcionario',
             'email' => 'funcionario@teste.com',
             'password' => Hash::make('12345678'),
             'role' => 'funcionario'
         ]);
    }
}
