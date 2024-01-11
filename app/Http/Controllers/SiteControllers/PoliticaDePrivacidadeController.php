<?php

namespace App\Http\Controllers\SiteControllers;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

use Illuminate\Http\Request;

class PoliticaDePrivacidadeController extends Controller
{
    private $dadosPagina;
    private $categorias;

    public function __construct() {
        $this->categorias = new Categoria();
    }

    public function index()
    {
        $this->dadosPagina['categoriasMenu'] = $this->categorias->getCategoriasMenu(18);
        return view('site.pages.politica-de-privacidade.index', $this->dadosPagina);
    }
}
