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
    return view('welcome');
});

Route::get('/login', function () {
    return view('Auth.login');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// film
Route::resource('/film', 'filmController');
Route::get('api.film', 'filmController@apifilm')->name('api.film');
Route::post('/tambah','filmController@create');
Route::post('/stores','filmController@store');
Route::post('/updte','filmController@update');
Route::get('/dit/{id}','filmController@edit');

Route::resource('/jadwal', 'jadwalController');
Route::get('api.jadwal', 'jadwalController@apijadwal')->name('api.jadwal');
Route::post('/tambah','jadwalController@create');
Route::post('/stores','jadwalController@store');
Route::post('/updte','jadwalController@update');
Route::get('/dit/{id_jadwal}','jadwalController@edit');

Route::resource('/seat', 'seatController');
Route::get('api.seat', 'seatController@apiseat')->name('api.seat');
Route::post('/tambah','seatController@create');
Route::post('/stores','seatController@store');
Route::post('/updte','seatController@update');
Route::get('/dit/{id}','seatController@edit');

Route::resource('/teater', 'teaterController');
Route::get('api.teater', 'teaterController@apiteater')->name('api.teater');
Route::post('/tambah','teaterController@create');
Route::post('/stores','teaterController@store');
Route::post('/updte','teaterController@update');
Route::get('/dit/{id}','teaterController@edit');

Route::resource('/transaksi', 'transaksiController');
Route::get('api.transaksi', 'transaksiController@apitransaksi')->name('api.transaksi');
Route::post('/tambah','transaksiController@create');
Route::post('/stores','transaksiController@store');
Route::post('/updte','transaksiController@update');
Route::get('/dit/{id}','transaksiController@edit');