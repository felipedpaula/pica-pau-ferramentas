<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class SiteCategoriasController extends Controller
{
    private $dadosPagina;
    private $categoria;
    private $categorias;
    private $produto;

    public function __construct()
    {
        $this->categoria = new Categoria();
        $this->categorias = new Categoria();
        $this->produto = new Produto();
    }

    public function singleCategoria(Request $request) {
        $categoria = $this->categoria->getSinglecategoria($request->slug);
        $this->dadosPagina['categoria'] = $categoria;
        $this->dadosPagina['categoriasMenu'] = $this->categorias->getCategoriasMenu(18);
        $this->dadosPagina['produtosDaCategoria'] = $this->produto->getProdutosMesmaCategoria($categoria->id);
        $this->dadosPagina['subcategorias'] = $this->categorias->getSubcategorias($categoria->id);
        return view('site.pages.categorias.single-categoria', $this->dadosPagina);
    }

    public function index(Request $request){
        $this->dadosPagina['tituloPagina'] = 'Todos as categorias';
        $this->dadosPagina['categoriasMenu'] = $this->categorias->getCategoriasMenu(18);
        $this->dadosPagina['allCategorias'] = $this->categoria->getCategorias();

        return view('site.pages.categorias.all-categorias', $this->dadosPagina);
    }
}
