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


Route::get('/', function () {
    return view('client/index');
})->name('index');

Route::get('/collection', function () {
    return view('client/collection');
})->name('collection');


Route::get('/detail', function () {
    return view('client/detail');
})->name('detail');

