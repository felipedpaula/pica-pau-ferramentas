<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    private $dadosPagina;
    private $user;

    public function index(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Todas as categorias de produtos';
        return view('cms.pages.categorias.index', $this->dadosPagina);
    }

    public function createCategoria(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Cadastro de nova categoria de produtos';
        return view('cms.pages.categorias.criar-categoria', $this->dadosPagina);
    }

    public function editCategoria(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Editar categoria';
        return view('cms.pages.categorias.editar-categoria', $this->dadosPagina);
    }

    public function indexProdutoPorCategoria(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Produtos da categoria - X';
        return view('cms.pages.categorias.produtos-por-categoria', $this->dadosPagina);
    }
}
