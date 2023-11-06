<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutosController;
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

    // Outras rotas específicas do CMS que só devem ser acessíveis por usuários autenticados:
    Route::middleware(['auth'])->group(function () {
        Route::post('logout', 'AuthController@logout')->name('logout');
        Route::get('register', 'AuthController@showRegistrationForm')->name('register');
        Route::post('register', 'AuthController@register');
        // Route::get('categorias/criar-categoria', [CategoriaController::class, 'indexCategorias']);
    });
});

Route::get('/admin/dashboard', function () {
    return view('cms.pages.dahsboard.index');
});

Route::get('/admin/users', 'UsersController@index')->name('user.index');
Route::get('/admin/users/register', 'UsersController@register')->name('user.register');

// rotas de controle de categoria e produtos -> exclusivas para admin (passar por autenticaçao)
Route::get('/admin/categorias', [CategoriaController::class, 'index']);
Route::get('/admin/categorias/criar', [CategoriaController::class, 'createCategoria']);
Route::get('/admin/categorias/editar/{slug_categoria}', [CategoriaController::class, 'editCategoria']);
Route::get('/admin/categorias/{slug_categoria}', [CategoriaController::class, 'indexProdutoPorCategoria']);

Route::get('/admin/produtos', [ProdutosController::class, 'index']);
Route::get('/admin/produtos/criar', [ProdutosController::class, 'createProduto']);
Route::get('/admin/produtos/editar/{slug_categoria}', [ProdutosController::class, 'editProduto']);
