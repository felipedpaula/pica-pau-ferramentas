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
            'email' => 'dev@email.com',
            'password' => Hash::make('12345678'),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'type_id' => 2,
            'email' => 'admin@email.com',
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
            'titulo' => 'Destaques Pequenos',
            'slug' => 'destaques-pequenos',
            'descricao' => 'Destaques abaixo do slider inicial | 3',
            'tamanho_img' => '400x250',
            'status' => true
        ]);

        DB::table('destaques_categorias')->insert([
            'titulo' => 'Banner Lateral',
            'slug' => 'banner-lateral',
            'descricao' => 'Banner lateral vertical do site | 1',
            'tamanho_img' => '400x250',
            'status' => true
        ]);

        DB::table('destaques_categorias')->insert([
            'titulo' => 'Ofertas Especiais',
            'slug' => 'ofertas-especiais',
            'descricao' => 'Cards ao lado do banner latera na Home | 1 Grande - 4 Pequenos',
            'tamanho_img' => '620x350 | 390x350',
            'status' => true
        ]);

        DB::table('destaques_categorias')->insert([
            'titulo' => 'Categorias dos Produtos',
            'slug' => 'categorias-produtos',
            'descricao' => 'Slider de categorias dos produtos',
            'tamanho_img' => '290x350',
            'status' => true
        ]);

        DB::table('categories')->insert([
            'name' => 'Parafusos',
            'description' => 'Descrição da Categoria Principal',
            'body' => 'Conteúdo adicional da Categoria Principal',
            'img_destaque' => 'url_da_imagem.jpg',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $categories = DB::table('categories')->pluck('id')->toArray();
        DB::table('products')->insert([
            'name' => 'Produto Exemplo',
            'slug' => 'produto-exemplo',
            'description' => 'Descrição do Produto Exemplo',
            'price' => 29.99,
            'category_id' => count($categories) > 0 ? $categories[0] : null,
            'image_url' => 'url_da_imagem_produto.jpg',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
