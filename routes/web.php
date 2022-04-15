<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PostController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/artikel',[ArtikelController::class, 'index']);
Route::post('/artikel/cari',[ArtikelController::class, 'search']);
Route::get('/artikel/penulis/{author}',[ArtikelController::class, 'author']);
Route::get('/artikel/kategori/{kat}',[ArtikelController::class, 'kat']);

Route::get('/galeri',[GaleriController::class, 'index']);
Route::post('/galeri/cari',[GaleriController::class, 'search']);

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login/auth',[LoginController::class, 'authenticate']);
Route::get('/logout',[LoginController::class, 'logout']);

Route::get('daftar',[RegisterController::class, 'index']);
Route::post('daftar/simpan',[RegisterController::class, 'simpan']);


Route::middleware('auth')->group(function(){

    Route::get('/post',[PostController::class, 'index']);
    Route::post('/post/buat',[PostController::class, 'create']);
    Route::post('/post/update/{id}',[PostController::class, 'edit']);
    Route::get('/post/ubah/{id}',[PostController::class, 'getUbah']);
    Route::get('/post/detail/{id}',[PostController::class, 'detail']);
    Route::get('/post/hapus/{id}',[PostController::class, 'delete']);

    
    Route::get('/profil',[ProfilController::class, 'index']);
    Route::post('/profil/ubah',[ProfilController::class, 'edit']);
    
});