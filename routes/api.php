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



Route::get('/servicos/{id}', 'Admin\ServicoController@getServicoJson')->name('servico.json');
Route::get('/servicos', 'Admin\ServicoController@getServicosJson')->name('servico.json');

Route::post('/servicos', 'Admin\ServicoController@criar')->name('servico.criar');