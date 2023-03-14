<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProductController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/auth', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'destroy']);

Route::resource('/data/pelanggan', PelangganController::class);
Route::resource('/data/karyawan', KaryawanController::class);
Route::resource('/data/barang', ProductController::class);
Route::get('/data/service', [ProductController::class, 'serviceIndex']);