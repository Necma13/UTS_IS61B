<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; // Pastikan untuk mengimpor SiswaController

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
