<?php

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransactionController;

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
Route::get('/data/service', function () {
    return view('data.service', [
        "data" => Product::where('type', 'service')->get()
    ]);
});
Route::post('/data/service', function (Request $request) {
  
    Product::create($request->all());
    return back()->with('success', 'Barang Baru Berhasil Ditambahkan!');
});


Route::resource('/transaksi/pemesanan_barang', TransactionController::class);
Route::delete('/transaksi/pemesanan_barang/{id}', [TransactionController::class, 'destroy']);
Route::get('/transaksi/pemesanan_barang/{id}/show', [TransactionController::class, 'show']);
Route::put('/transaksi/pemesanan_barang/verifikasi/{id}', [TransactionController::class, 'verifikasi']);


Route::get('/supplier', function() {
        return view('supplier.index', [
            "data" => Transaction::all()
        ]);
});


Route::get('/access', [UserController::class, 'index']);
Route::post('/access', [UserController::class, 'store']);
