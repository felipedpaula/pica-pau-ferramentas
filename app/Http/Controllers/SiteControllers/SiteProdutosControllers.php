<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;

use Illuminate\Http\Request;

class SiteProdutosControllers extends Controller
{
    private $dadosPagina;
    private $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    public function index(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Produto tal';
        return view('site.pages.produtos.single-produto', $this->dadosPagina);
    }

}
