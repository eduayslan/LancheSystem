<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'joão silva',
            'email'=> 'joao@email.com',
            'cpf' => '123.456.789-57',
            'telefone' => '67 99804-0794',
            'endereco' => 'Rua Exemplo, 123',
            'password' => Hash::make('123456'),
        ]);
    }
}
