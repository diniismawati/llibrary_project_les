<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;

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

Route::get('/',[AuthController::class, 'index'])->name('login');
Route::get('/register',[AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registered']);
Route::post('/ceklogin', [AuthController::class,'ceklogin']);

Route::middleware('auth')->group(function(){
    //kode untuk mengakses halaman dengan cara login
Route::get('/logout',[ AuthController::class, 'logout']);

Route::get('/kategori', [KategoriController::class,'index']);
Route::post('/kategori', [KategoriController::class,'kategori']);
Route::get('/datakategori',[KategoriController::class,'datakategori']);
Route::get('/kategori/edit/{id}',[KategoriController::class,'edit']);
Route::post('/ubahkategori/{id}',[KategoriController::class,'ubah']);
Route::get('/hapuskategori/{id}',[KategoriController::class,'hapus']);


Route::get('/buku', [BukuController::class,'index']);
Route::post('/bukus', [BukuController::class,'buku']);
Route::get('/databuku',[BukuController::class,'databuku']);
Route::get('/buku/edit/{id}',[BukuController::class,'edit']);
Route::post('/ubahbuku/{id}',[BukuController::class,'ubah']);
Route::get('/hapusbuku/{id}',[BukuController::class,'hapus']);


Route::get('/penerbit',[PenerbitController::class,'index'])->middleware('auth');
Route::post('/penerbit',[PenerbitController::class,'penerbit']);
Route::get('/datapenerbit',[PenerbitController::class,'datapenerbit']);
Route::get('/penerbit/edit/{id}',[PenerbitController::class,'edit']);
Route::post('/ubahpenerbit/{id}',[PenerbitController::class,'ubah']);
Route::get('/hapuspenerbit/{id}',[PenerbitController::class,'hapus']);

});
