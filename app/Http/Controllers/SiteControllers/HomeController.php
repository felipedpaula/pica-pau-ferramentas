<?php

namespace App\Http\Controllers\SiteControllers;
use App\Http\Controllers\Controller;
use App\Models\Destaque;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $destaques;
    private $dadosPagina;

    public function __construct() {
        $this->destaques = new Destaque();
    }

    public function index()
    {
        $this->dadosPagina['destaques_slide'] = $this->destaques->getDestaques('slider-home', 3);
        $this->dadosPagina['destaques_pequenos'] = $this->destaques->getDestaques('destaques-pequenos', 3);
        $this->dadosPagina['ofertas_especiais'] = $this->destaques->getDestaques('ofertas-especiais', 6);

        return view('site.pages.home.index', $this->dadosPagina);
    }
}
