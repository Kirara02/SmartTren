<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/artikel',[ArtikelController::class, 'index']);
Route::post('/artikel/cari',[ArtikelController::class, 'search']);
Route::post('/artikel/buat',[ArtikelController::class, 'create']);
Route::get('/artikel/author',[ArtikelController::class, 'author']);

Route::get('/galeri',[GaleriController::class, 'index']);
Route::post('/galeri/cari',[GaleriController::class, 'search']);

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login/auth',[LoginController::class, 'authenticate']);
Route::get('/logout',[LoginController::class, 'logout']);

Route::get('daftar',[RegisterController::class, 'index']);
Route::post('daftar/simpan',[RegisterController::class, 'simpan']);

Route::get('/profil',[ProfilController::class, 'index']);
Route::post('/profil/ubah',[ProfilController::class, 'edit']);