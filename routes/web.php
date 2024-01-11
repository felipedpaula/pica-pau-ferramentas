<?php

use App\Http\Controllers\CmsControllers\UsersController;
use App\Http\Controllers\CmsControllers\CategoriasController;
use App\Http\Controllers\CmsControllers\ProdutosController;
use App\Http\Controllers\CmsControllers\DashboardController;
use App\Http\Controllers\CmsControllers\DestaquesController;
use App\Http\Controllers\SiteControllers\ContatoController;
use App\Http\Controllers\SiteControllers\HomeController;
use App\Http\Controllers\SiteControllers\PoliticaDePrivacidadeController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\SiteControllers\SiteCategoriasController;
use App\Http\Controllers\SiteControllers\SiteProdutosControllers;
use App\Http\Controllers\SiteControllers\SobreController;
use App\Http\Controllers\SiteControllers\TermosDeUsoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Home ---------------------------------
Route::get('/', [HomeController::class, 'index'])->name('site.home');

// Pagina de Produto unico
Route::get('/produto/{slug}.html', [SiteProdutosControllers::class, 'singleProduto'])->name('produto.single');

// Pagina com todos os produtos
Route::get('/produtos', [SiteProdutosControllers::class, 'index'])->name('produto.geral');

// Pagina com todas as categorias
Route::get('/categorias', [SiteCategoriasController::class, 'index'])->name('categoria.geral');

// Pagina de Categoria unica
Route::get('/categoria/{slug}.html', [SiteCategoriasController::class, 'singleCategoria'])->name('categoria.single');

// Sobre nós ---------------------------------
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

// Política de Privacidade ---------------------------------
Route::get('/politica-de-privacidade', [PoliticaDePrivacidadeController::class, 'index'])->name('politica-privacidade');

// Termos de uso ---------------------------------
Route::get('/termos-de-uso', [TermosDeUsoController::class, 'index'])->name('termos-uso');

// Contato ---------------------------------
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

// Fedback
Route::post('/contato/send-feedback', [FeedBackController::class, 'sendFeedBack'])->name('sendfb');

// Galeria ---------------------------------
// Route::get('/galeria', function () {
//     return view('site.pages.galeria.index');
// });

// Blog -----------------------------------
// Route::get('/blog', function () {
//     return view('site.pages.blog.index');
// });

// Rotas CMS ################################################################
// --------------------------------------------------------------------------
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::get('/', [DashboardController::class, 'index']);
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
        Route::get('/categorias/{id}/edit', [CategoriasController::class, 'editCategoria'])->name('categoria.edit');
        Route::put('/categorias/{id}/update', [CategoriasController::class, 'update'])->name('categoria.update');
        Route::delete('/categorias/{id}/delete', [CategoriasController::class, 'delete'])->name('categoria.delete');
        // -- ADICIONAR/REMOVER FOTOS DA CATEGORIA
        Route::put('/categorias/{id}/add', [CategoriasController::class, 'add'])->name('categoria.add');
        Route::get('/categorias/{id}/remove/{id_foto}', [CategoriasController::class, 'remove'])->name('categoria.remove');

        // PRODUTOS
        Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
        Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produto.create');
        Route::post('/produtos/store', [ProdutosController::class, 'store'])->name('produto.store');
        Route::get('/produtos/{id}/edit', [ProdutosController::class, 'edit'])->name('produto.edit');
        Route::put('/produtos/{id}/update', [ProdutosController::class, 'update'])->name('produto.update');
        Route::delete('/produtos/{id}/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
        // -- ADICIONAR/REMOVER FOTOS DO PRODUTO
        Route::put('/produtos/{id}/add', [ProdutosController::class, 'add'])->name('produto.add');
        Route::get('/produtos/{id}/remove/{id_foto}', [ProdutosController::class, 'remove'])->name('produto.remove');

        // DESTAQUES(HOME)
        Route::get('/destaques', [DestaquesController::class, 'index'])->name('destaques.index');
        Route::get('/destaques/register', [DestaquesController::class , 'register'])->name('destaque.create');
        Route::post('/destaques/store', [DestaquesController::class , 'store'])->name('destaque.store');
        Route::get('/destaques/{id}/edit', [DestaquesController::class , 'edit'])->name('destaque.edit');
        Route::put('/destaques/{id}/update', [DestaquesController::class , 'update'])->name('destaque.update');
        Route::delete('/destaques/{id}/delete', [DestaquesController::class , 'delete'])->name('destaque.delete');

        Route::post('logout', 'AuthController@logout')->name('logout');
    });
});


