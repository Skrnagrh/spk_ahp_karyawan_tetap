<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\KriteriaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\AlternatifController;
use App\Http\Controllers\Dashboard\SubKriteriaController;
use App\Http\Controllers\Dashboard\DataPenggunaController;
use App\Http\Controllers\Dashboard\AlternatifDetailController;
use App\Http\Controllers\Dashboard\PerhitunganKriteriaController;
use App\Http\Controllers\Dashboard\PerhitunganAlternatifController;
use App\Http\Controllers\Dashboard\PerhitunganSubkriteriaController;

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

// Halaman Utama (Homepage)
Route::get('/', function () {
    return view('index');
});

// Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {

    // Halaman Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Kriteria
    Route::get('/kriteria', [KriteriaController::class, 'index']);
    Route::post('/kriteria/store', [KriteriaController::class, 'store']);
    Route::get('/kriteria/{id}', [KriteriaController::class, 'show']);
    Route::put('/kriteria/update', [KriteriaController::class, 'update'])->name('kriteria.update');
    Route::post('/kriteria/edit', [KriteriaController::class, 'edit']);
    Route::delete('/kriteria/destroy', [KriteriaController::class, 'destroy']);

    // Subkriteria
    Route::get('/subkriteria', [SubKriteriaController::class, 'index']);
    Route::post('/subkriteria/store', [SubKriteriaController::class, 'store']);
    Route::get('/subkriteria/edit', [SubKriteriaController::class, 'edit']);
    Route::put('/subkriteria/update', [SubKriteriaController::class, 'update']);
    Route::delete('/subkriteria/destroy', [SubKriteriaController::class, 'destroy']);

    // Alternatif
    Route::get('/alternatif', [AlternatifController::class, 'index']);
    Route::post('/alternatif/store', [AlternatifController::class, 'store']);
    Route::get('/alternatif/edit', [AlternatifController::class, 'edit']);
    Route::put('/alternatif/update', [AlternatifController::class, 'update'])->name('alternatif.update');
    Route::delete('/alternatif/destroy', [AlternatifController::class, 'destroy'])->name('alternatif.destroy');

    // Alternatif Detail atau Parameter Alternatif
    Route::get('/alternatif_detail', [AlternatifDetailController::class, 'index']);
    Route::post('/alternatif_detail/store', [AlternatifDetailController::class, 'store']);
    Route::put('/alternatif_detail/update', [AlternatifDetailController::class, 'update']);
    Route::delete('/alternatif_detail/destroy', [AlternatifDetailController::class, 'destroy']);

    // Perhitungan Matrix Kriteria
    Route::get('/perhitungan', [PerhitunganKriteriaController::class, 'index']);
    Route::post('/perhitungan/store', [PerhitunganKriteriaController::class, 'store']);
    Route::get('/perhitungan/hasil', [PerhitunganKriteriaController::class, 'hasil']);

    // Perhitungan Matrix Subkriteria
    Route::get('/perhitungan_subkriteria', [PerhitunganSubkriteriaController::class, 'index']);
    Route::get('/perhitungan_subkriteria/matrix', [PerhitunganSubkriteriaController::class, 'matrix']);
    Route::get('/perhitungan_subkriteria/hasil', [PerhitunganSubkriteriaController::class, 'hasil']);
    Route::post('/perhitungan_subkriteria/store', [PerhitunganSubkriteriaController::class, 'store']);

    // Perhitungan Alternatif (Perhitungan Akhir) dan Prangkingan
    Route::get('/perhitungan_subkriteria/alternatif', [PerhitunganAlternatifController::class, 'alternatif']);
    Route::get('/perhitungan_subkriteria/prangkingan', [PerhitunganAlternatifController::class, 'prangkingan']);

    // Kelola data pengguna
    Route::resource('/datapengguna', DataPenggunaController::class)->except('show', 'create');
});
