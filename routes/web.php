<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/connexion', function () {
    return view('login');
})->name('login');

Route::get('/inscription', function () {
    return view('signup');
})->name('signup');


Route::get('/', [\App\Http\Controllers\RouteController::class, 'index'])->name('index');

Route::get('/detail/{id}', [\App\Http\Controllers\RouteController::class, 'detail'])->name('detail');

Route::get('/collection', function () {
    return view('client/collection');
})->name('collection');




