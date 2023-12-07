<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Produto::create([
            'codigo'=>'1a2a3',
            'descricao'=>'Achocolatado em pó',
            'custoProducao'=>3000,
            'unidade'=>'1kg',
            'quantidadeEstoque'=>5000
        ]);

        Produto::create([
            'codigo'=>'1a2b3',
            'descricao'=>'Leite em pó',
            'custoProducao'=>1490,
            'unidade'=>'1kg',
            'quantidadeEstoque'=>3000
        ]);

        Produto::create([
            'codigo'=>'1a2c3',
            'descricao'=>'Leite',
            'custoProducao'=>7000,
            'unidade'=>'1L',
            'quantidadeEstoque'=>10527
        ]);
    }
}
