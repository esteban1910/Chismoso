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

/*
Route::get('/', function () {
    return view('programas.form');

});
*/
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
/*
Route::resource('direccionar', 'DatosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/






//Route::get('/', 'HomeController@index')->name('home');
/*
Route::get('/', function () {
    return view('programas.form');
});
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

use Illuminate\Support\Facades\Route;

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::view('/','layouts.principal');

Route::resource('registro', 'RegistroController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/principal','layouts.principal');

Route::view('/', 'programas.inicio');

//s Route::view('/prin','programas.form');