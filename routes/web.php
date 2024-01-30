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

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', 'App\Http\Controllers\HomeController@index');

Route::get('dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('pelanggan', 'App\Http\Controllers\PelangganController@index');
Route::get('pelanggan/create', 'App\Http\Controllers\PelangganController@create');
Route::post('pelanggan/store', 'App\Http\Controllers\PelangganController@store');
Route::get('pelanggan/{nama}/edit', 'App\Http\Controllers\PelangganController@edit');
Route::put('pelanggan/{nama}', 'App\Http\Controllers\PelangganController@update');


Route::get('pelanggan/delete/{nama}', 'App\Http\Controllers\PelangganController@destroy');
Route::get('pelanggan/exportexcel', 'App\Http\Controllers\PelangganController@exportExcel');
Route::get('pelanggan/exportpdf', 'App\Http\Controllers\PelangganController@exportPdf');
Route::post('pelanggan/importexcel', 'App\Http\Controllers\PelangganController@pelangganimportExcel');



Route::get('produk', 'App\Http\Controllers\ProdukController@index');
Route::get('produk/tambah', 'App\Http\Controllers\ProdukController@tambah');
Route::post('produk/store', 'App\Http\Controllers\ProdukController@store');
Route::get('produk/edit/{id}', 'App\Http\Controllers\ProdukController@edit');
Route::post('produk/update', 'App\Http\Controllers\ProdukController@update');
Route::get('produk/hapus/{id}', 'App\Http\Controllers\ProdukController@hapus');


