<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaImagem extends Model
{
    protected $table = 'category_images';

    public function getImagensByCategoriaId($id) {
        $imagens = ProdutoImagem::where('category_id', $id)->get();
        return $imagens;
    }
}
