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

Route::name('articulos')->get('/articulos','ArticulosController@index');
Route::name('insertar_articulo')->get('/articulos/nuevo',
'ArticulosController@nuevo');
Route::name('guardar_articulo')->post('/articulos',
'ArticulosController@guardar');
Route::name('un_articulo')->get('/articulos/{art}',
'ArticulosController@mostrar_articulo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
