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
//Route::get('');
Route::get('/DetailProduk','DetailProdukController@getAll');
Route::get('/test',function(){
    return view('welcome');
})->name('sest');
Route::get('/SatuanProduk','SatuanProdukController@getAll');
Route::get('/JenisTransaksi','JenisTransaksiController@getAll');
route::get('TambahLaporan','LaporanController@tambahData')->name('tambahLaporan');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('auth.login');
});