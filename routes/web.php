<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Dashboard
Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard.index');

// Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('admin.pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('admin.pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('admin.pegawai.store');
Route::get('/pegawai/{id}/read', [PegawaiController::class, 'show'])->name('admin.pegawai.read');
Route::get('/pegawai/{id}/update', [PegawaiController::class, 'edit'])->name('admin.pegawai.edit');
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('admin.pegawai.update');
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('admin.pegawai.destroy');

// Profil
Route::get('/profil', [ProfilController::class, 'index'])->name('admin.profil.index');
