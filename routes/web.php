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

//** Admin */

Auth::routes();
// auth
Route::group(['middleware' => ['auth'], "namespace" => "Admin"], function () {
    
    Route::group(['prefix' => '/'], function () {
        Route::get('/', ['uses' => 'HomeController@index']);
        Route::get('/home', ['uses' => 'HomeController@index']);
    });

    Route::group(['prefix' => '/monitoramento'], function () {
        Route::get('/', ['uses' => 'MonitoramentoController@index']);
    });

    Route::group(['prefix' => '/tipoManutencao'], function () {
        Route::get('/', ['uses' => 'TipoManutencaoController@index']);
        Route::get('/criar', ['uses' => 'TipoManutencaoController@criar']);
        Route::get('/mostrar/{codigo}', ['uses' => 'TipoManutencaoController@mostrar']);
        Route::post('/gravar', ['uses' => 'TipoManutencaoController@gravar']);
    });

    Route::group(['prefix' => '/manutencao'], function () {
        Route::get('/', ['uses' => 'ManutencaoController@index']);
        Route::get('/criar', ['uses' => 'ManutencaoController@criar']);
        Route::get('/mostrar/{codigo}', ['uses' => 'ManutencaoController@mostrar']);
        Route::post('/gravar', ['uses' => 'ManutencaoController@gravar']);
    });

    Route::group(['prefix' => '/regiao'], function () {
        Route::get('/', ['uses' => 'RegiaoController@index']);
        Route::get('/criar', ['uses' => 'RegiaoController@criar']);
        Route::get('/mostrar/{codigo}', ['uses' => 'RegiaoController@mostrar']);
        Route::post('/gravar', ['uses' => 'RegiaoController@gravar']);
    });

    Route::group(['prefix' => '/especie'], function () {
        Route::get('/', ['uses' => 'EspecieController@index']);
        Route::get('/criar', ['uses' => 'EspecieController@criar']);
        Route::get('/mostrar/{codigo}', ['uses' => 'EspecieController@mostrar']);
        Route::post('/gravar', ['uses' => 'EspecieController@gravar']);
    });

    Route::group(['prefix' => '/arvores'], function () {
        Route::get('/', ['uses' => 'ArvoreController@index']);
        Route::get('/criar', ['uses' => 'ArvoreController@criar']);
        Route::get('/mostrar/{codigo}', ['uses' => 'ArvoreController@mostrar']);
        Route::post('/gravar', ['uses' => 'ArvoreController@gravar']);
    });
    
});
