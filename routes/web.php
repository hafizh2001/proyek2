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

Route::get('user', function () {
    return view('detailUserChild');
});
Route::get('/KeluarMasukProduk','LaporanController@getAll');
route::get('tambahTransaksi','LaporanController@create');

Route::get('/test',function(){
    return view('welcome');
})->name('sest');
//------------------Start Jenis Transaksi Route--------------
Route::get('/JenisTransaksi','JenisTransaksiController@getAll');
route::get('tambah_jenis_transaksi','JenisTransaksiController@tambahData');
route::post('create_jenis_transaksi','JenisTransaksiController@create');
route::get('edit_transaksi_{id}','JenisTransaksiController@edit');
route::post('update_jenis_transaksi_{id}','JenisTransaksiController@update');
route::get('delete_transaksi_{id}','JenisTransaksiController@delete');
//------------------End Jenis Transaksi Route----------------
route::get('TambahLaporan','LaporanController@tambahData')->name('tambahLaporan');

//route::get('TambahJenisTransaksi','jenisTransaksiController@tambahData');
//--------------------Start Satuan Produk Route--------------
Route::get('SatuanProduk','SatuanProdukController@getAll');
route::get('TambahSatuanProduk','SatuanProdukController@tambahData');
route::post('CreateSatuan','SatuanProdukController@create');
route::get('UbahSatuan_{id}','SatuanProdukController@edit');
route::post('update_satuan_{id}','SatuanProdukController@update');
route::get('delete_satuan_{id}','SatuanProdukController@delete');

//--------------------End Satuan Produk Route--------------------

//-------------------Start Produk Route--------------------------
Route::get('/DetailProduk','DetailProdukController@getAll');
Route::get('tambah_produk','DetailProdukController@tambah');
Route::post('create_produk','DetailProdukController@create');

//-------------------End Produk Route----------------------------

Auth::routes();
Route::get('/home', 'HomeController@index')->name('homse');
Route::get('/', function () {
    return view('auth.login');
});
//--------------------karyawan---------------------------
Route::get('/userr','UserController@getAll');

