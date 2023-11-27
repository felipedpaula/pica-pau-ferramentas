<?php

use App\Http\Controllers\CmsControllers\UsersController;
use App\Http\Controllers\CmsControllers\CategoriasController;
use App\Http\Controllers\CmsControllers\ProdutosController;
use App\Http\Controllers\CmsControllers\DashboardController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\SiteControllers\SiteCategoriasController;
use App\Http\Controllers\SiteControllers\SiteProdutosControllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();


// Home ---------------------------------
Route::get('/', function () {
    return view('site.pages.home.index');
});

// Pagina de Produto unico
Route::get('/produto/{slug}.html', [SiteProdutosControllers::class, 'singleProduto'])->name('produto.single');

// Pagina com todos os produtos
Route::get('/produtos', [SiteProdutosControllers::class, 'index'])->name('produto.geral');

// Pagina com todas as categorias
Route::get('/categorias', [SiteCategoriasController::class, 'index'])->name('categoria.geral');

// Pagina de Categoria unica
Route::get('/categoria/{slug}.html', [SiteCategoriasController::class, 'singleCategoria'])->name('categoria.single');

// Contato ---------------------------------
Route::get('/sobre', function () {
    return view('site.pages.sobre.index');
});

// Contato ---------------------------------
Route::get('/contato', function () {
    return view('site.pages.contato.index');
});
// Fedback
Route::post('/contato/send-feedback', [FeedBackController::class, 'sendFeedBack'])->name('sendfb');

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
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // USUÁRIOS
        Route::get('/users', [UsersController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UsersController::class, 'create'])->name('user.create');
        Route::post('/users/store', [UsersController::class, 'store'])->name('user.store');
        Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('user.edit');
        Route::post('/users/{id}/update', [UsersController::class, 'update'])->name('user.update');
        Route::get('/users/{id}/delete', [UsersController::class, 'delete'])->name('user.delete');

        // CATEGORIAS
        Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias.index');
        Route::get('/categorias/create', [CategoriasController::class, 'create'])->name('categoria.create');
        Route::post('/categorias/store', [CategoriasController::class, 'store'])->name('categoria.store');
        Route::get('/categorias/{id}/edit', [CategoriasController::class, 'edit'])->name('categoria.edit');
        Route::post('/categorias/{id}/update', [CategoriasController::class, 'update'])->name('categoria.update');
        Route::get('/categorias/{id}/delete', [CategoriasController::class, 'delete'])->name('categoria.delete');

        // PRODUTOS
        Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
        Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produto.create');
        Route::post('/produtos/store', [ProdutosController::class, 'store'])->name('produto.store');
        Route::get('/produtos/{id}/edit', [ProdutosController::class, 'edit'])->name('produto.edit');
        Route::post('/produtos/{id}/update', [ProdutosController::class, 'update'])->name('produto.update');
        Route::get('/produtos/{id}/delete', [ProdutosController::class, 'delete'])->name('produto.delete');

        // CATEGORIAS DESTAQUES (Não editável)
        Route::get('/destaques-categorias', [DestaquesController::class, 'indexCategorias'])->name('destaquesCategorias.index');
        // --- DESTAQUES
        Route::get('/destaques-categorias/{id_categoria}', [DestaquesController::class, 'indexDestaques'])->name('destaques.index');
        Route::get('/destaques-categorias/{id_categoria}/create', [DestaquesController::class, 'createDestaque'])->name('destaque.create');
        Route::post('/destaques-categorias/{id_categoria}/store', [DestaquesController::class, 'storeDestaque'])->name('destaque.store');
        Route::get('/destaques-categorias/{id_categoria}/{id_destaque}/edit', [DestaquesController::class, 'editDestaque'])->name('destaque.edit');
        Route::post('/destaques-categorias/{id_categoria}/{id_destaque}/update', [DestaquesController::class, 'updateDestaque'])->name('destaque.update');
        Route::post('/destaques-categorias/{id_categoria}/{id_destaque}/delete', [DestaquesController::class, 'deleteDestaque'])->name('destaque.delete');


        Route::post('logout', 'AuthController@logout')->name('logout');
    });
});


