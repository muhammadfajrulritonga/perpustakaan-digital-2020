<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;

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
    return view('index');
});

Route::resource('anggota', AnggotaController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('buku', BukuController::class);
Route::resource('transaksi', TransaksiController::class);

Route::get('transaksi/edit/{id}', [TransaksiController::class, 'edit']);
Route::get('transaksi/showBuku/{id}', [TransaksiController::class, 'showBuku']);
Route::get('transaksi/getAnggota/{id}', [TransaksiController::class, 'getAnggota']);
Route::post('/transaksi/update/{id}', [TransaksiController::class, 'update']);