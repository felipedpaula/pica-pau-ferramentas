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
        // Obtem IDs de todas as subcategorias
        $subcategoryIds = $this->getSubcategoryIds($categoriaId);

        // Inclui o ID da categoria atual na lista de IDs para busca
        $categoryIds = $subcategoryIds->push($categoriaId);

        $dados = DB::table($this->table)
            ->select('name','slug','description','price','category_id','image_url','status')
            ->where('status', 1)
            ->whereIn('category_id', $categoryIds) // Modificado para buscar em múltiplas categorias
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

    public function getSubcategoryIds($parentId) {
        $subcategories = DB::table('categories')
            ->where('parent_category_id', $parentId)
            ->pluck('id');

        return $subcategories;
    }
}
