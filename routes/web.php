<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AdminController::class, 'login'])->name('login');
Route::post('login', [AdminController::class, 'cekLogin']);
Route::get('logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware(['auth:petugas'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Route::get('dashboard_petugas', [AdminController::class, 'dashboard_petugas'])->name('dashboard_petugas');
});

// route petugas
Route::get('/data-petugas',[PetugasController::class, 'utama']);
Route::get('/tambah-petugas',[PetugasController::class, 'tambah']);
Route::post('/tambah-petugas',[PetugasController::class, 'simpan']);
Route::get('/edit/Petugas/{id_petugas}',[PetugasController::class, 'tampil']);
Route::post('/edit/Petugas/{id_petugas}',[PetugasController::class, 'update']);
Route::get('/delete/Petugas/{id_petugas}',[PetugasController::class, 'delete']);

// route masyarakat
Route::get('/data-masyarakat',[MasyarakatController::class, 'utama']);
Route::get('/tambah-masyarakat',[MasyarakatController::class, 'tambah']);
Route::post('/tambah-masyarakat',[MasyarakatController::class, 'simpan']);
Route::get('/edit/Masyarakat/{id_user}',[MasyarakatController::class, 'tampil']);
Route::post('/edit/Masyarakat/{id_user}',[MasyarakatController::class, 'update']);
Route::get('/delete/Masyarakat/{id_user}',[MasyarakatController::class, 'delete']);

// route barang
Route::get('/barang',[BarangController::class, 'utama']);
Route::get('/tambah-barang',[BarangController::class, 'tambah']);
Route::post('/tambah-barang',[BarangController::class, 'simpan']);
Route::get('/edit/Barang/{id_barang}',[BarangController::class, 'tampil']);
Route::post('/edit/Barang/{id_barang}',[BarangController::class, 'update']);
Route::get('/delete/Barang/{id_barang}',[BarangController::class, 'delete']);

Route::get('/dashboard_petugas', function(){
    return view('dashboard_petugas');
});