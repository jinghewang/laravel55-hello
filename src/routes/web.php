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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//person
Route::get('/person', 'PersonController@index');
Route::get('/person/zr', 'PersonController@zr');
Route::get('/person/index', 'PersonController@index');
Route::get('/person/create', 'PersonController@create');
Route::any('/person/store', 'PersonController@store');
Route::get('/person/{id}', 'PersonController@show');
Route::get('/person/{id}/edit', 'PersonController@edit');
Route::any('/person/{id}/update', 'PersonController@update');
Route::any('/person/{id}/deleteMsg', 'PersonController@deleteMsg');
