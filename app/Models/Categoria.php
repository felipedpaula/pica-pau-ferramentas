<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'body',
        'img_destaque',
        'parent_category_id',
        'status'
    ];

    /**
     * Obtém todas categorias.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getCategorias()
    {
        $dados = DB::table($this->table)
            ->select('id','name', 'description', 'body', 'parent_category_id', 'img_destaque', 'status', 'slug')
            ->where('status', 1)
            ->orderBy('name', 'asc')
            ->paginate(10);
        return $dados;
    }

    /**
     * Obtém uma categoria especifica
     *
     *
     */
    public function getSingleCategoria()
    {
        $dados = DB::table($this->table)
            ->select('id','name', 'description', 'body', 'parent_category_id', 'img_destaque', 'status')
            ->where('status', 1)
            ->orderBy('name', 'asc')
            ->first();
        return $dados;
    }

            /**
     * Obtém a categoria de um produto.
     *
     *
     */
    public function getCategoriaDoProduto($id)
    {
        $dados = DB::table($this->table)
            ->select('name', 'slug', 'description', 'status')
            ->where('status', 1)
            ->where('id', $id)
            ->orderBy('name', 'asc')
            ->first();
        return $dados;
    }

    public static function getCategoriasMenu($limit) {
        return self::select('name', 'slug')
                ->where('status', 1)
                ->orderBy('name', 'asc')
                ->take($limit)
                ->get();
    }
}
