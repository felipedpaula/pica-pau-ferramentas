<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;

use Illuminate\Http\Request;

class SiteCategoriasController extends Controller
{
    private $dadosPagina;
    private $categoria;
    private $produto;

    public function __construct()
    {
        $this->categoria = new Categoria();
        $this->produto = new Produto();
    }

    public function singleCategoria(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'categoria tal';

        $slug = preg_replace('/\/categoria\/([^\/]+)\.html$/', '$1', $request->getRequestUri());

        $categoria = $this->categoria->getSinglecategoria($slug);

        $this->dadosPagina['produtosDaCategoria'] = $this->produto->getProdutosMesmaCategoria($categoria->id);

        // fazer tratamento de subCategoria

        $this->dadosPagina['categoria'] = $categoria;

        // dd($this->categoria->getSinglecategoria($slug));
        return view('site.pages.categorias.single-categoria', $this->dadosPagina);
    }

    public function index(Request $request){
        $this->dadosPagina['tituloPagina'] = 'Todos as categorias';

        $this->dadosPagina['allCategorias'] = $this->categoria->getCategorias();

        return view('site.pages.categorias.all-categorias', $this->dadosPagina);
    }
}
