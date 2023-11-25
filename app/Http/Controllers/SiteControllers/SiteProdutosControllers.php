<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Categoria;

use Illuminate\Http\Request;

class SiteProdutosControllers extends Controller
{
    private $dadosPagina;
    private $produto;
    private $categoria;

    public function __construct()
    {
        $this->produto = new Produto();
        $this->categoria = new Categoria();
    }

    public function index(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Produto tal';

        $slug = preg_replace('/\/produto\/([^\/]+)\.html$/', '$1', $request->getRequestUri());

        $produto = $this->produto->getSingleProduto($slug);

        $this->dadosPagina['categoriaProduto'] = $this->categoria->getCategoriaDoProduto($produto->category_id);

        $this->dadosPagina['produtosRelacionados'] = $this->produto->getProdutosSimilares($produto->id, $produto->category_id);

        $this->dadosPagina['produto'] = $produto;


        // dd($this->produto->getSingleProduto($slug));
        return view('site.pages.produtos.single-produto', $this->dadosPagina);
    }

}
