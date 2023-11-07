<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Home ---------------------------------
Route::get('/', function () {
    return view('site.pages.home.index');
});

// Contato ---------------------------------
Route::get('/sobre', function () {
    return view('site.pages.sobre.index');
});

// Contato ---------------------------------
Route::get('/contato', function () {
    return view('site.pages.contato.index');
});

// Galeria ---------------------------------
Route::get('/galeria', function () {
    return view('site.pages.galeria.index');
});

// Blog -----------------------------------
Route::get('/blog', function () {
    return view('site.pages.blog.index');
});



// Rotas CMS ################################################################
// --------------------------------------------------------------------------
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/users', 'UsersController@index')->name('users.index');
    Route::get('/users/register', 'UsersController@register')->name('user.create');
    
    // rotas de controle de categoria e produtos -> exclusivas para admin (passar por autenticaçao)
    Route::get('/categorias', [CategoriaController::class, 'index']);
    Route::get('/categorias/criar', [CategoriaController::class, 'createCategoria']);
    Route::get('/categorias/editar/{slug_categoria}', [CategoriaController::class, 'editCategoria']);
    Route::get('/categorias/{slug_categoria}', [CategoriaController::class, 'indexProdutoPorCategoria']);

    Route::get('/produtos', [ProdutosController::class, 'index']);
    Route::get('/produtos/criar', [ProdutosController::class, 'createProduto']);
    Route::get('/produtos/editar/{slug_categoria}', [ProdutosController::class, 'editProduto']);

    // Outras rotas específicas do CMS que só devem ser acessíveis por usuários autenticados:
    Route::middleware(['auth'])->group(function () {
        Route::post('logout', 'AuthController@logout')->name('logout');
        Route::get('register', 'AuthController@showRegistrationForm')->name('register');
        Route::post('register', 'AuthController@register');
        // Route::get('categorias/criar-categoria', [CategoriaController::class, 'indexCategorias']);
    });
});


