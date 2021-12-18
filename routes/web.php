<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\HomeController;
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


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});



Route::resource('daftar', DaftarController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/search', [HomeController::class, 'search'])->name('home.search');
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar.index');
Route::get('/daftar/create', [DaftarController::class, 'create'])->name('daftar.create');
Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar.store');
Route::get('/daftar/{daftar}', [DaftarController::class, 'show'])->name('daftar.show');
Route::get('/daftar/{daftar}/edit', [DaftarController::class, 'edit'])->name('daftar.edit');
Route::patch('/daftar/{daftar}', [DaftarController::class, 'update'])->name('daftar.update');
Route::delete('/daftar/{daftar}', [DaftarController::class, 'destroy'])->name('daftar.destroy');


Route::resource('pengaturan', DaftarController::class);
Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');
Route::get('/pengaturan/create', [PengaturanController::class, 'create'])->name('pengaturan.create');
Route::post('/pengaturan', [PengaturanController::class, 'store'])->name('pengaturan.store');
// Route::delete('/daftar/{barang_bukti}/delete', [PengaturanController::class, 'destroy'])->name('daftar.destroy');
// Route::get('/daftar/{daftar}', [DaftarController::class, 'show'])->name('daftar.show');
// Route::get('/daftar/{daftar}/edit', [DaftarController::class, 'edit'])->name('daftar.edit');
// Route::patch('/daftar/{daftar}', [DaftarController::class, 'update'])->name('daftar.update');
// Route::get('/daftar/create', [DaftarController::class, 'selectsector'])->name('daftar.create');
// Route::get('/daftar/create', [BarangBuktiController::class, 'index'])->name('bukti.index');
// Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'daftar'])->name('daftar');
// Route::get('/detail', [App\Http\Controllers\DaftarController::class, 'daftar'])->name('daftar');

// Route::get('/daftar-tilang', [DaftarTilangController::class, 'index']);
// Route::get('/daftar-tilang-data', [DaftarTilangController::class, 'getDaftarTilangs'])->name('daftar.tilang');
// Route::get('/formDaftar', [App\Http\Controllers\DaftarController::class, 'formDaftar'])->name('formDaftar');
