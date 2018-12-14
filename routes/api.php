<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('usuarios', 'UsuarioController');
Route::resource('filmes', 'FilmeController');
Route::resource('series', 'SerieController');
//Route::resource('temporadas', 'TemporadaController');
Route::resource('episodios', 'EpisodioController');
Route::resource('estatistica_filmes', 'EstatisticaFilmeController');
Route::resource('estatistica_episodios', 'EstatisticaEpisodioController');