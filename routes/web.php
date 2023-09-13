<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\FilterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// L'ensemble des routes pour la connexion

Route::get('/inscription', [OwnerController::class, 'signup'])->name('signup');

Route::post('/inscription/register', [OwnerController::class, 'form_register']);

Route::get('/connexion', [OwnerController::class, 'login'])->name('login');

Route::post('/connexion/user', [OwnerController::class, 'form_login']);

Route::get('/redirect', function(){
    return view('redirect');
});

Route::get('/déconnexion', [OwnerController::class, 'logout'])->name('logout');

// Partie admin

Route::prefix('/admin')->name('admin')-> group (function(){
    Route::get('/', [AdminController::class, 'homeadmin']) -> name('homeadmin');
    Route::get('/nftlist', [AdminController::class, 'nftlist']) -> name('nftlist');
    
    Route::get('/addnft', [AdminController::class, 'addnft']) -> name('addnft');
    Route::get('/addnft/treatment', [AdminController::class, 'form_add']);

});




// L'ensemble des routes pour la navigation d'un utilisateur

Route::get('/', [RouteController::class, 'index'])->name('index');

Route::get('/collection',  [RouteController::class, 'collection'])->name('collection');

Route::get('/{id}', [RouteController::class, 'detail'])->name('detail');









