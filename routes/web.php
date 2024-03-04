<?php

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

// Route::get('/', function () {
//     return view('user.welcome');
// });

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('pelanggan', 'App\Http\Controllers\PelangganController@index');
Route::get('pelanggan/create', 'App\Http\Controllers\PelangganController@create');
Route::post('pelanggan/store', 'App\Http\Controllers\PelangganController@store');
Route::get('pelanggan/edit/{nama}', 'App\Http\Controllers\PelangganController@edit');
Route::post('pelanggan/{nama}', 'App\Http\Controllers\PelangganController@update');


Route::get('pelanggan/delete/{nama}', 'App\Http\Controllers\PelangganController@destroy');
Route::get('pelanggan/exportexcel', 'App\Http\Controllers\PelangganController@exportExcel');
Route::get('pelanggan/exportpdf', 'App\Http\Controllers\PelangganController@exportPdf');
Route::post('pelanggan/importexcel', 'App\Http\Controllers\PelangganController@pelangganimportExcel');



Route::get('produk', 'App\Http\Controllers\ProdukController@index');
Route::get('produk/tambah', 'App\Http\Controllers\ProdukController@tambah');
Route::post('produk/store', 'App\Http\Controllers\ProdukController@store');
Route::get('produk/edit/{id_produk}', 'App\Http\Controllers\ProdukController@edit');
Route::post('produk/{id_produk}', 'App\Http\Controllers\ProdukController@update');
Route::get('produk/hapus/{id_produk}', 'App\Http\Controllers\ProdukController@hapus');

Route::get('services', 'App\Http\Controllers\ServicesController@index');
Route::get('services/tambah', 'App\Http\Controllers\ServicesController@tambah');
Route::post('services/store', 'App\Http\Controllers\ServicesController@store');
Route::get('services/edit/{id_services}', 'App\Http\Controllers\ServicesController@edit');
Route::post('services/{id_services}', 'App\Http\Controllers\ServicesController@update');
Route::get('services/hapus/{id}', 'App\Http\Controllers\ServicesController@hapus');

Route::get('waktu', 'App\Http\Controllers\WaktuController@index');
Route::get('waktu/tambah', 'App\Http\Controllers\WaktuController@tambah');
Route::post('waktu/store', 'App\Http\Controllers\WaktuController@store');
Route::get('waktu/edit/{id}', 'App\Http\Controllers\WaktuController@edit');
Route::post('waktu/update', 'App\Http\Controllers\WaktuController@update');
Route::get('waktu/hapus/{id}', 'App\Http\Controllers\WaktuController@hapus');
Route::get('times/getTimes', 'App\Http\Controllers\timesController@getTimes');


Route::get('reservasi', 'App\Http\Controllers\ReservasiController@index');
Route::post('reservasi', 'App\Http\Controllers\ReservasiController@tambah');
Route::get('reservasi/hapus/{id_reservasi}', 'App\Http\Controllers\ReservasiController@hapus');





