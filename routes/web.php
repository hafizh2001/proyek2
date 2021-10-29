<?php

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
    return view('/dashboardChild');
});
Route::get('/KeluarMasukProduk','LaporanController@getAll');
Route::get('/DetailProduk',function(){
    return view('detailProdukChild');
});
Route::get('/test',function(){
    return view('welcome');
})->name('sest');
Route::get('/SatuanProduk',function(){
    return view('satuanProdukChild');
});
Route::get('/JenisTransaksi', function(){
    return view ('jenisTransaksiChild');
});
route::get('TambahLaporan','LaporanController@tambahData')->name('tambahLaporan');