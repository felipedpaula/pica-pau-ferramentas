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

    public function getCategorias()
    {
        $dados = DB::table($this->table)
            ->select('id','name', 'description', 'body', 'parent_category_id', 'img_destaque', 'status', 'slug')
            ->where('status', 1)
            ->orderBy('name', 'asc')
            ->paginate(10);
        return $dados;
    }

    public function getSingleCategoria($slug)
    {
        $dados = DB::table($this->table)
            ->select('id','name', 'description', 'body', 'parent_category_id', 'img_destaque', 'status')
            ->where('slug', $slug)
            ->where('status', 1)
            ->orderBy('name', 'asc')
            ->first();
        return $dados;
    }

    public function getCategoriaDoProduto($id)
    {
        $dados = DB::table($this->table)
            ->select('id', 'name', 'slug', 'description', 'status')
            ->where('status', 1)
            ->where('id', $id)
            ->orderBy('name', 'asc')
            ->first();
        return $dados;
    }

    public static function getCategoriasMenu($limit)
    {
        return self::select('name', 'slug')
            ->where('status', 1)
            ->orderBy('name', 'asc')
            ->take($limit)
            ->get();
    }

    public static function getCategoriasDestaques($limit)
    {
        return self::select('name', 'slug', 'img_destaque')
            ->where('status', 1)
            ->whereNull('parent_category_id')
            ->orderBy('name', 'asc')
            ->take($limit)
            ->get();
    }

}
