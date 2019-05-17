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

Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('nosotros', 'MainController@us');

Route::get('ubicacion', 'MainController@location');

Route::post('info', 'MainController@requestInfo');

Route::get('nuestro-trabajo', 'MainController@activities');

Route::get('seminariohg/detalles', 'SeminarHGController@show')->name('seminar.show');
Route::get('seminariohg/salir', 'SeminarHGController@logout')->name('seminar.logout');
Route::get('seminariohg', 'SeminarHGController@index')->name('seminar.index')->middleware('auth');

