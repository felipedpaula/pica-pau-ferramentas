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
        Route::get('/produtos/{slug}/edit', [ProdutosController::class, 'edit'])->name('produto.edit');
        Route::put('/produtos/{id}/update', [ProdutosController::class, 'update'])->name('produto.update');
        Route::get('/produtos/{id}/delete', [ProdutosController::class, 'delete'])->name('produto.delete');

        // DESTAQUES(HOME)
        Route::get('/destaques', [DestaqueController::class, 'index'])->name('destaques.index');
        Route::get('/destaques/register', [DestaqueController::class , 'register'])->name('destaque.create');
        Route::post('/destaques/store', [DestaqueController::class , 'store'])->name('destaque.store');
        Route::get('/destaques/{id}/edit', [DestaqueController::class , 'edit'])->name('destaque.edit');
        Route::put('/destaques/{id}/update', [DestaqueController::class , 'update'])->name('destaque.update');
        Route::delete('/destaques/{id}/delete', [DestaqueController::class , 'delete'])->name('destaque.delete');

        // EVENTOS
        Route::get('/events', [EventController::class , 'index'])->name('events.index');
        Route::get('/events/register', [EventController::class , 'register'])->name('event.create');
        Route::post('/events/store', [EventController::class , 'store'])->name('event.store');
        Route::get('/events/{id}/edit', [EventController::class , 'edit'])->name('event.edit');
        Route::put('/events/{id}/update', [EventController::class , 'update'])->name('event.update');
        Route::delete('/events/{id}/delete', [EventController::class , 'delete'])->name('event.delete');

        // PAGINAS HOME
        Route::get('/paginas/home', [PaginaHome::class, 'index'])->name('paginas.home');


        Route::post('logout', 'AuthController@logout')->name('logout');
    });
});


