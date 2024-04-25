<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;


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

Route::get('/', [InformasiController::class, 'index'])->name('index');
Route::get('/login', [InformasiController::class, 'login'])->name('login');
Route::get('/admin', [InformasiController::class, 'admin'])->name('admin');
Route::post('/login', [InformasiController::class, 'auth'])->name('login.auth');
Route::post('/admin', [InformasiController::class, 'store'])->name('store.data');
Route::delete('/hapus/{id}', [InformasiController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [InformasiController::class, 'edit'])->name('edit');
Route::patch('/ubah/{id}', [InformasiController::class, 'update'])->name('ubah');