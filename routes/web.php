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

<<<<<<< HEAD
=======
Route::get('/', 'HomeController@index')->name('home');
>>>>>>> 89b1f447d154be4b9e1c19744a84d468801d0ac7

Route::middleware(['auth'])->group(function(){
	Route::resource('barang', 'BarangController');
	Route::resource('supplier', 'SupplierController');
	Route::resource('pembelian', 'PembelianController');
	Route::resource('penjualan', 'PenjualanController');
	Route::resource('customer', 'CustomerController');
	Route::resource('pegawai', 'PegawaiController');
	Route::resource('absen', 'AbsenController');

<<<<<<< HEAD
	Route::get('/table/barang/json', 'BarangController@json')->name('jsonbarang');
=======
	Route::get('/barang/json', 'BarangController@json');
>>>>>>> 89b1f447d154be4b9e1c19744a84d468801d0ac7
	Route::get('/supplier/json', 'SupplierController@json');
	Route::get('/pegawai/json', 'PegawaiController@json');
	Route::get('/customer/json', 'CustomerController@json');
	Route::get('/pembelian/json', 'PembelianController@json');
	Route::get('/penjualan/json', 'PenjualanController@json');

	Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
=======

	Route::post('/ajax/barang/load', 'BarangController@json')->name('barang_load');
>>>>>>> 89b1f447d154be4b9e1c19744a84d468801d0ac7
	Route::get('/ajax/add/supplier', 'AjaxController@addSupplier');
	Route::post('/ajax/add/supplier', 'AjaxController@storeSupplier');

	Route::get('/ajax/add/customer', 'AjaxController@addCustomer');
	Route::post('/ajax/add/customer', 'AjaxController@storeCustomer');
	
	Route::get('/test', 'AjaxController@test');
<<<<<<< HEAD
	Route::get('/', 'HomeController@index')->name('home');

});
Auth::routes();
Route::post('login', 'HomeController@login');
=======
});
Auth::routes();

>>>>>>> 89b1f447d154be4b9e1c19744a84d468801d0ac7
