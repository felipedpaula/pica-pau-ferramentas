<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('user_types')->insert([
            'title' => 'Root',
        ]);

        DB::table('user_types')->insert([
            'title' => 'Administrador',
        ]);

        DB::table('user_types')->insert([
            'title' => 'Assistente de conteúdo',
        ]);

        DB::table('users')->insert([
            'name' => 'Dev',
            'type_id' => 1,
            'email' => 'felipeppdev@gmail.com',
            'password' => Hash::make('12345678'),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'João',
            'type_id' => 1,
            'email' => 'essadoj@gmail.com',
            'password' => Hash::make('12345678'),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('destaques_categorias')->insert([
            'titulo' => 'Slider Home',
            'slug' => 'slider-home',
            'descricao' => 'Slides da primeira seção da Home',
            'tamanho_img' => '1920x803',
            'status' => true
        ]);

        DB::table('destaques_categorias')->insert([
            'titulo' => 'Ofertas Especiais',
            'slug' => 'ofertas-especiais',
            'descricao' => 'Cards ao lado do banner latera na Home | 1 Grande - 4 Pequenos',
            'tamanho_img' => '620x350 | 390x350',
            'status' => true
        ]);
    }
}
