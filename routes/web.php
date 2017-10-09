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

Route::get('/', 'welcomeController@index');
Route::get('/support', 'welcomeController@support');
Route::get('/about', 'welcomeController@about');
Route::get('/blog', 'welcomeController@blog');
Route::get('/contact', 'welcomeController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
