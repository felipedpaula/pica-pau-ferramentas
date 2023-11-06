<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    private $dadosPagina;
    private $user;

    public function index(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Todas os produtos';
        return view('cms.pages.produtos.index', $this->dadosPagina);
    }

    public function createProduto(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Cadastro de novo produto';
        return view('cms.pages.produtos.criar-produto', $this->dadosPagina);
    }

    public function editProduto(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Editar produto';
        return view('cms.pages.produtos.editar-produto', $this->dadosPagina);
    }

}
