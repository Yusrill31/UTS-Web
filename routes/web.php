<?php

use App\http\Controllers\JenisTanamanHiasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [JenisTanamanHiasController::class, 'index']);
Route::get('/tambah', [JenisTanamanHiasController::class, 'tambah']);
Route::post('/tambah', [JenisTanamanHiasController::class, 'store']);
Route::get('/hapus/{id}', [JenisTanamanHiasController::class, 'hapus']);
Route::get('/edit/{id}', [JenisTanamanHiasController::class, 'edit']);
Route::post('/edit/{id}', [JenisTanamanHiasController::class, 'update']);
Route::get('/lihat/{id}', [JenisTanamanHiasController::class, 'lihat']);

