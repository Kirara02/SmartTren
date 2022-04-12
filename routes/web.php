<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
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

Route::get('/', [ArtikelController::class, 'home']);
Route::get('/artikel',[ArtikelController::class, 'index']);
Route::post('/artikel/cari',[ArtikelController::class, 'search']);
Route::post('/artikel/penulis',[ArtikelController::class, 'author']);
Route::get('/galeri',[GaleriController::class, 'index']);
Route::post('/galeri/cari',[GaleriController::class, 'search']);
