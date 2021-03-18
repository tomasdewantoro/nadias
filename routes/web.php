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

Route::get('/', 'DashboardController@index')->name('dashboard')->middleware('auth');

Route::get('/dashboard','DashboardController@index');


//InformasiPenyakit
Route::post('/informasiPenyakit','InformasiPenyakitController@store');
Route::get('/informasiPenyakit','InformasiPenyakitController@index');
Route::post('/informasiPenyakit/{id}','InformasiPenyakitController@destroy');
Route::get('/informasiPenyakit/{id}/edit', 'InformasiPenyakitController@edit');
Route::post('/informasiPenyakit/{id}/edit', 'InformasiPenyakitController@update');

//DataGejala
Route::post('/dataGejala','DataGejalaController@store');
Route::get('/dataGejala','DataGejalaController@index');
Route::post('/dataGejala/{id}','DataGejalaController@destroy');
Route::get('/dataGejala/{id}/edit', 'DataGejalaController@edit');
Route::post('/dataGejala/{id}/edit', 'DataGejalaController@update');

//DataPenyakit
Route::get('/dataPenyakit','DataPenyakitController@index');
Route::post('/dataPenyakit','DataPenyakitController@store');
Route::post('/dataPenyakit/{id}','DataPenyakitController@destroy');
Route::get('/dataPenyakit/{id}/edit', 'DataPenyakitController@edit');
Route::post('/dataPenyakit/{id}/edit', 'DataPenyakitController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
