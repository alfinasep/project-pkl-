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


Route::get('/',function(){
	return view('Auth.login');
});



//buku

Route::resource('/buku','anggota_controller');


//pendaftaran
Route::resource('/pendaftaran','siswa_controller');

Route::get('/tambahh','siswa_controller@create');

Route::post('/storess','siswa_controller@store');

Route::get('/hps/{id}','siswa_controller@destroy');

Route::post('/updte','siswa_controller@update');

Route::get('/edit/{id}','siswa_controller@edit');

//perpustakaan
Route::resource('/perpustakaan','daftar_controller');

Route::get('/add','daftar_controller@create');

Route::post('/store','daftar_controller@store');

Route::get('/destroy/{id}','daftar_controller@destroy');

Route::post('/update','daftar_controller@update');

Route::get('/setting/{id}','daftar_controller@edit');



//

Route::get('/nah', function () {
    return view('tampilan.child');
});

Route::get('/contoh', function () {
    return view('tampilan.child2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//bio

Route::resource('/riwayat','riwayat_controller');

Route::get('/tambih','riwayat_controller@create');

Route::post('/stre','riwayat_controller@store');

Route::get('/del/{id}','riwayat_controller@destroy');

Route::post('/dit','riwayat_controller@update');

Route::get('/editing/{id}','riwayat_controller@edit');