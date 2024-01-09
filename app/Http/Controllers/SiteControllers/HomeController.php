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
        return view('site.pages.home.index', $this->dadosPagina);
    }
}
