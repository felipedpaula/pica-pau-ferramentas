<?php

namespace App\Http\Controllers\CmsControllers;
use App\Http\Controllers\Controller;
use App\Models\PageView;
use App\Models\Device;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $dadosPagina;
    private $pageAccessData;
    private $deviceData;

    public function __construct() {
        $this->pageAccessData = new PageView();
        $this->deviceData = new Device();
    }

    public function index() {
        $this->dadosPagina['tituloPagina'] = 'Dashboard';
        $this->dadosPagina['pageAccessData'] = $this->pageAccessData->getPageAccessData();
        $this->dadosPagina['deviceData'] = $this->deviceData->getDeviceData();
        return view('cms.pages.dahsboard.index', $this->dadosPagina);
    }
}
