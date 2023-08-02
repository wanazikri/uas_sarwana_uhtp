<?php

use App\Http\Controllers\BukuControllerDesiratnasari;
use App\Http\Controllers\DosenControllerFennyAnggela;
use App\Http\Controllers\MatakuliahControllerNurhidayati;
use App\Http\Controllers\SkripsiController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('katalog', 'App\Http\Controllers\KatalogController@index');
Route::get('katalog/tambah', 'App\Http\Controllers\KatalogController@tambah');
Route::post('katalog/tambah_proses', 'App\Http\Controllers\KatalogController@tambah_proses');
Route::get('katalog/edit/{id}', 'App\Http\Controllers\KatalogController@edit');
Route::post('katalog/edit_proses', 'App\Http\Controllers\KatalogController@edit_proses');
Route::get('katalog/delete/{id}', 'App\Http\Controllers\KatalogController@delete');

Route::get('peminjam', 'App\Http\Controllers\PeminjamController@index');
Route::get('peminjam/tambah', 'App\Http\Controllers\PeminjamController@tambah');
Route::post('peminjam/tambah_proses', 'App\Http\Controllers\PeminjamController@tambah_proses');
Route::get('peminjam/edit/{id}', 'App\Http\Controllers\PeminjamController@edit');
Route::post('peminjam/edit_proses', 'App\Http\Controllers\PeminjamController@edit_proses');
Route::get('peminjam/delete/{id}', 'App\Http\Controllers\PeminjamController@delete');

//route nurhidayati
Route::get('/matakuliah', [MatakuliahControllerNurhidayati::class,'index'])->name('matakuliah');
Route::get('/tambah_matkul', [MatakuliahControllerNurhidayati::class,'create'])->name('tambah_matkul');
Route::PUT('/simpan_matkul', [MatakuliahControllerNurhidayati::class,'store'])->name('simpan_matkul');
Route::get('/edit_matkul/{matakuliah}', [MatakuliahControllerNurhidayati::class,'edit'])->name('edit_matkul');
Route::PATCH('/update_matkul', [MatakuliahControllerNurhidayati::class,'update'])->name('update_matkul');
Route::get('/delete_matkul/{matakuliah}', [MatakuliahControllerNurhidayati::class,'destroy'])->name('delete_matkul');

//route fenyanggela
Route::get('/dosen', [DosenControllerFennyAnggela::class,'index'])->name('dosen');
Route::get('/tambah_dosen', [DosenControllerFennyAnggela::class,'create'])->name('tambah_dosen');
Route::PUT('/simpan_dosen', [DosenControllerFennyAnggela::class,'store'])->name('simpan_dosen');
Route::get('/edit_dosen/{dosen}', [DosenControllerFennyAnggela::class,'edit'])->name('edit_dosen');
Route::PATCH('/update_dosen', [DosenControllerFennyAnggela::class,'update'])->name('update_dosen');
Route::get('/delete_dosen/{dosen}', [DosenControllerFennyAnggela::class,'destroy'])->name('delete_dosen');

//route desi ratna sari
Route::get('/buku', [BukuControllerDesiratnasari::class,'index'])->name('buku');
Route::get('/tambah_buku', [BukuControllerDesiratnasari::class,'create'])->name('tambah_buku');
Route::PUT('/simpan_buku', [BukuControllerDesiratnasari::class,'store'])->name('simpan_buku');
Route::get('/edit_buku/{buku}', [BukuControllerDesiratnasari::class,'edit'])->name('edit_buku');
Route::PATCH('/update_buku', [BukuControllerDesiratnasari::class,'update'])->name('update_buku');
Route::get('/delete_buku/{buku}', [BukuControllerDesiratnasari::class,'destroy'])->name('delete_buku');

//route sarwana
Route::get('/skripsi', [SkripsiController::class,'index'])->name('skripsi');
Route::get('/tambah_skripsi', [SkripsiController::class,'create'])->name('tambah_skripsi');
Route::PUT('/simpan_skripsi', [SkripsiController::class,'store'])->name('simpan_skripsi');
Route::get('/edit_skripsi/{skripsi}', [SkripsiController::class,'edit'])->name('edit_skripsi');
Route::PATCH('/update_skripsi', [SkripsiController::class,'update'])->name('update_skripsi');
Route::get('/delete_skripsi/{skripsi}', [SkripsiController::class,'destroy'])->name('delete_skripsi');