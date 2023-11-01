<?php

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
    });
});

Route::get('/admin/dashboard', function () {
    return view('cms.pages.dahsboard.index');
});

Route::get('/admin/users', 'UsersController@index')->name('user.index');
Route::get('/admin/users/register', 'UsersController@register')->name('user.register');
