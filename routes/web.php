<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RouteController;

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

Route::get('/inscription', [OwnerController::class, 'signup'])->name('signup');

Route::post('/inscription/register', [OwnerController::class, 'form_register']);

Route::get('/connexion', [OwnerController::class, 'login'])->name('login');

Route::post('/connexion/user', [OwnerController::class, 'form_login']);

Route::get('/redirect', function(){
    return view('redirect');
});

Route::get('/déconnexion', [OwnerController::class, 'logout'])->name('logout');







Route::get('/', [\App\Http\Controllers\RouteController::class, 'index'])->name('index');

Route::get('/detail/{id}', [\App\Http\Controllers\RouteController::class, 'detail'])->name('detail');

Route::get('/collection', function () {
    return view('client/collection');
})->name('collection');




