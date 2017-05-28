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
Route::get('/login', 'ResponsaveisController@login')->name("login");
Route::get('/cadastro', 'ResponsaveisController@register')->name("cadastro");
Route::get('/logoff', 'ResponsaveisController@logoff')->name("logoff");

Route::get('/', 'HomeController@index')->name("/");
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'ProductController@search');
Route::post('/login/make', 'ResponsaveisController@makeLogin')->name("make_login");
Route::post('/cadastrar', 'ResponsaveisController@makeRegister')->name("cadastrar");
Route::get('/produtos/criar', 'ProductController@create')->name("produtos.create");
Route::post('/produtos/inserir', 'ProductController@store')->name("produtos.store");
Route::get('/anuncios', 'ProductController@anuncios')->name("anuncios");




