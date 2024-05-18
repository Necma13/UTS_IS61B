<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; // Pastikan untuk mengimpor SiswaController
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\PembayaranController;

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

// Route::get('/', function () {
//     return view('master');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data siswa
Route::get('/siswa/', [SiswaController::class, 'index'])->middleware('auth');
Route::get('/siswa/form/', [SiswaController::class, 'create'])->middleware('auth');
Route::post('/siswa/store/', [SiswaController::class, 'store'])->middleware('auth');
Route::get('/siswa/edit/{nisn}', [SiswaController::class, 'edit'])->middleware('auth');
Route::put('/siswa/{nisn}', [SiswaController::class, 'update'])->middleware('auth');
Route::delete('/siswa/{nisn}', [SiswaController::class, 'destroy'])->middleware('auth');

//Data Pelajaran
Route::get('/pelajaran/', [PelajaranController::class, 'index'])->middleware('auth');
Route::get('/pelajaran/form/', [PelajaranController::class, 'create'])->middleware('auth');
Route::post('/pelajaran/store/', [PelajaranController::class, 'store'])->middleware('auth');
Route::get('/pelajaran/edit/{id}', [PelajaranController::class, 'edit'])->middleware('auth');
Route::put('/pelajaran/{id}', [PelajaranController::class, 'update'])->middleware('auth');
Route::delete('/pelajaran/{id}', [PelajaranController::class, 'destroy'])->middleware('auth');

//Data Pembayaran
Route::get('/pembayaran/', [PembayaranController::class, 'index'])->middleware('auth');
Route::get('/pembayaran/form/', [PembayaranController::class, 'create'])->middleware('auth');
Route::post('/pembayaran/store/', [PembayaranController::class, 'store'])->middleware('auth');
Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit'])->middleware('auth');
Route::put('/pembayaran/{id}', [PembayaranController::class, 'update'])->middleware('auth');
Route::delete('/pembayaran/{id}', [PembayaranController::class, 'destroy'])->middleware('auth');
