<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\ProdutoImagem;
use App\Models\Categoria;

use Illuminate\Http\Request;

class SiteProdutosControllers extends Controller
{
    private $dadosPagina;
    private $produto;
    private $categoria;
    private $categorias;
    private $imgsProduto;

    public function __construct()
    {
        $this->produto = new Produto();
        $this->categoria = new Categoria();
        $this->categorias = new Categoria();
        $this->imgsProduto = new ProdutoImagem();
    }

    public function singleProduto(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'Produto tal';

        $produto = $this->produto->getSingleProduto($request->slug);

        $this->dadosPagina['categoriaProduto'] = $this->categoria->getCategoriaDoProduto($produto->category_id);
        $this->dadosPagina['imgsProduto'] = $this->imgsProduto->getImagensByProdutoId($produto->id);
        $this->dadosPagina['categoriasMenu'] = $this->categorias->getCategoriasMenu(18);
        $this->dadosPagina['produtosRelacionados'] = $this->produto->getProdutosSimilares($produto->id, $produto->category_id);

        $this->dadosPagina['produto'] = $produto;
        $this->dadosPagina['slug'] = $request->slug;

        // dd($this->produto->getSingleProduto($slug));
        return view('site.pages.produtos.single-produto', $this->dadosPagina);
    }

    public function index(Request $request){
        $this->dadosPagina['tituloPagina'] = 'Todos os produtos';

        $this->dadosPagina['allProdutos'] = $this->produto->getProdutos();

        return view('site.pages.produtos.all-produtos', $this->dadosPagina);
    }
}
