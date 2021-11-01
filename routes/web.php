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

//Route::get('/', function () {
    //return view('/dashboardChild');
//});
Route::get('/KeluarMasukProduk','LaporanController@getAll');
route::get('tambahTransaksi','LaporanController@create');
Route::get('/DetailProduk','DetailProdukController@getAll');
Route::get('/test',function(){
    return view('welcome');
})->name('sest');

Route::get('/JenisTransaksi','JenisTransaksiController@getAll');
route::get('TambahLaporan','LaporanController@tambahData')->name('tambahLaporan');
//route::get('TambahJenisTransaksi','jenisTransaksiController@tambahData');
//--------------------Satuan Produk Route--------------
Route::get('/SatuanProduk','SatuanProdukController@getAll');
route::get('TambahSatuanProduk','SatuanProdukController@tambahData');
route::post('CreateSatuan','SatuanProdukController@create');
//--------------------end Satuan Produk Route----------
Auth::routes();
Route::get('/home', 'HomeController@index')->name('homse');
Route::get('/', function () {
    return view('auth.login');
});