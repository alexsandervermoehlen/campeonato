<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Rotas relacionadas ao campeonato.
 */

Route::get('/campeonato', 
    'App\Http\Controllers\CampeonatoController@listagem');
Route::get('/campeonato/{id}',
    'App\Http\Controllers\CampeonatoController@detalhe')
    ->where('id','[0-9]+');
Route::get('/campeonato_delete/{id}',
    'App\Http\Controllers\CampeonatoController@delete')
    ->where('id','[0-9]+');

Route::get('/campeonato/formulario',
    'App\Http\Controllers\CampeonatoController@formulario');
Route::post('/campeonato/inserir',
    'App\Http\Controllers\CampeonatoController@insert');
    
Route::get('/campeonato_update/{id}',
'App\Http\Controllers\CampeonatoController@update')
->where('id','[0-9]+');
Route::post('/campeonato_altera/{id}',
'App\Http\Controllers\CampeonatoController@altera')
->where('id','[0-9]+');

/**
 * Rotas relacionadas ao time.
 */
Route::get('/time', 
'App\Http\Controllers\TimeController@listagem');
Route::get('/time/{id}',
'App\Http\Controllers\TimeController@detalhe')
->where('id','[0-9]+');
Route::get('/time_delete/{id}',
'App\Http\Controllers\TimeController@delete')
->where('id','[0-9]+');

Route::get('/time/formulario',
'App\Http\Controllers\TimeController@formulario');
Route::post('/time/inserir',
'App\Http\Controllers\TimeController@insert');

Route::get('/time_update/{id}',
'App\Http\Controllers\TimeController@update')
->where('id','[0-9]+');
Route::post('/time_altera/{id}',
'App\Http\Controllers\TimeController@altera')
->where('id','[0-9]+');


/**
 * Rotas relacionadas ao atleta.
 */

Route::get('/atleta', 
'App\Http\Controllers\AtletaController@listagem');
Route::get('/atleta/{id}',
'App\Http\Controllers\AtletaController@detalhe')
->where('id','[0-9]+');
Route::get('/atleta_delete/{id}',
'App\Http\Controllers\AtletaController@delete')
->where('id','[0-9]+');


Route::get('/atleta/formulario',
'App\Http\Controllers\AtletaController@formulario');
Route::post('/atleta/inserir',
'App\Http\Controllers\AtletaController@insert');


Route::get('/atleta_update/{id}',
'App\Http\Controllers\AtletaController@update')
->where('id','[0-9]+');
Route::post('/atleta_altera/{id}',
'App\Http\Controllers\AtletaController@altera')
->where('id','[0-9]+');
