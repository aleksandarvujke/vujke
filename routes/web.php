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



Route::get('/', 'RegisterController@home');

Route::post('/likes', 'RegisterController@like');


Route::post('/register', 'RegisterController@store');


Route::get('/login', 'SessionController@create');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');

Route::get('/category', 'CategoryController@index');

Route::post('/t', 'TretmansController@store');

Route::get('/t/create', 'TretmansController@create');

Route::get('/tretmans', 'TretmansController@index');

Route::get('/g/create', 'GalleryController@create');

Route::post('/g', 'GalleryController@store');
