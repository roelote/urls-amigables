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


  Route::get('/', function () {
     return view('welcome');
 });


Route::get('/libros', 'LibroController@index')->name('libros.index');

Route::get('/libros/create', 'LibroController@create')->name('libros.create');
Route::post('/libros', 'LibroController@store')->name('libros.store');
// Route::get('/libros/{libro}', 'LibroController@show')->name('libros.show');

Route::get('/libros/{slug}', ['as' => 'libros.show.inicio', 'uses' => 'LibroController@show']);

Route::get('/libros/{libro}/edit', 'LibroController@edit')->name('libros.edit');
Route::patch('/libros/{libro}', 'LibroController@update')->name('libros.update');
Route::delete('/libros/{libro}', 'LibroController@destroy')->name('libros.destroy');


Route::get('/', 'HomepageController@index')->name('home.index');
Route::get('/{slug}', ['as' => 'inicio.show.inicio', 'uses' => 'HomepageController@show']);

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
