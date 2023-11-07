<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $this->dadosPagina['tituloPagina'] = 'Dashboard';
        return view('cms.pages.dahsboard.index', $this->dadosPagina);
    }
}
