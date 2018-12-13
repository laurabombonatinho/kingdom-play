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

Route::get('/Login', function () {
    return view('Login');
});

/*Route::get('/Cadastro', function () {
    return view('Usuario/Cadastro');
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('logout', 'Auth\LoginController@logout');

Route::get('/usuarios/produtos/{id}', 'UsuarioController@produtos')->name('usuarios.produtos');
Route::get('/usuarios/remove/{id}', 'UsuarioController@remover')->name('usuarios.remove');
Route::resource('usuarios', 'UsuarioController');

Route::resource('filmes', 'FilmeController');

Route::resource('series', 'SerieController');

Route::resource('temporadas', 'TemporadaController');
