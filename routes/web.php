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


Route::get('/', 'HomeController@index')->name('home');
Route::get('privacy-policy', 'StaticPageController@privacy')->name('privacy');
Route::get('lavora-con-noi', 'StaticPageController@lavoraConNoi')->name('lavora-con-noi');
Route::get('corso', 'CorsoController@corso')->name('corso');
Route::get('metodo', 'MetodoController@metodo')->name('metodo');
