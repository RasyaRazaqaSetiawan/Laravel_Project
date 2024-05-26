<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// penulis
use App\Http\Controllers\PenulisController;
Route::resource('penulis', PenulisController::class);
// /penulis

// buku
use App\Http\Controllers\BukuController;
Route::resource('buku', BukuController::class);
// /buku
