<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutoImagem extends Model
{
    protected $table = 'product_images';

    public function getImagensByProdutoId($id) {
        $imagens = ProdutoImagem::where('product_id', $id)->get();
        return $imagens;
    }
}
