<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;

use Illuminate\Http\Request;

class SiteCategoriasController extends Controller
{
    private $dadosPagina;
    private $categoria;

    public function __construct()
    {
        $this->categoria = new Categoria();
    }

    public function index(Request $request) {
        $this->dadosPagina['tituloPagina'] = 'categoria tal';
        // $this->dadosPagina['categoriasLista'] = $this->categoria->getCategorias();
        return view('site.pages.categorias.single-categoria', $this->dadosPagina);
    }
}
