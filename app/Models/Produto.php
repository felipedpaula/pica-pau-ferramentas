<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'category_id',
        'image_url',
        'status',
    ];

    /**
     * Obtém todos os produtos.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getProdutos(){
        $dados = DB::table($this->table)
            ->select('id','name','slug','description','price','category_id','image_url','status')
            ->where('status', 1)
            ->orderBy('name', 'asc')
            ->get();
        return $dados;
    }

    /*
     * Obtém todos um unico produto especifico.
    */
    public function getSingleProduto($slug){
        $dados = DB::table($this->table)
            ->select('id','name','slug','description','price','category_id','image_url','status')
            ->where('status', 1)
            ->where('slug', $slug)
            ->first();
        return $dados;
    }

    public function getProdutosSimilares($produtoId, $categoriaId){
        $dados = DB::table($this->table)
            ->select('name','slug','description','price','category_id','image_url','status')
            ->where('status', 1)
            ->where('category_id', $categoriaId)
            ->where('id', '!=', $produtoId) // Exclui o produto em visualização
            ->orderBy('name', 'asc')
            ->get();
        return $dados;
    }

    public function getProdutosMesmaCategoria($categoriaId){
        $dados = DB::table($this->table)
            ->select('name','slug','description','price','category_id','image_url','status')
            ->where('status', 1)
            ->where('category_id', $categoriaId)
            ->orderBy('name', 'asc')
            ->get();
        return $dados;
    }

    public static function getProdutosCategoriaMenu($categoriaId, $limit) {
        return self::select('name', 'slug')
                ->where('status', 1)
                ->where('category_id', $categoriaId)
                ->orderBy('name', 'asc')
                ->take($limit)
                ->get();
    }
}
