<?php

namespace App\Http\Controllers\CmsControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $dadosPagina;

    public function index() {
        $this->dadosPagina['tituloPagina'] = 'Dashboard';
        return view('cms.pages.dahsboard.index', $this->dadosPagina);
    }
}
