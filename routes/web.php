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

Route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
Route::get('/portifolio', ['as' => 'site.portifolio', 'uses' => 'Site\PortifolioController@index']);
Route::get('/contato',['as'=>'site.contato', 'uses' => 'Site\ContatoController@index']);
Route::post('/contato/salvar', ['as' => 'site.contato.salvar', 'uses' => 'Site\ContatoController@salvar']);


Route::get('/admin/servicos',['as'=>'admin.servicos','uses'=>'Admin\ServicoController@index']);
Route::get('/admin/servicos/adicionar',['as'=>'admin.servicos.adicionar','uses'=>'Admin\ServicoController@adicionar']);
Route::post('/admin/servicos/salvar',['as'=>'admin.servicos.salvar','uses'=>'Admin\ServicoController@salvar']);
Route::get('/admin/servicos/editar/{id}',['as'=>'admin.servicos.editar','uses'=>'Admin\ServicoController@editar']);
Route::put('/admin/servicos/atualizar/{id}',['as'=>'admin.servicos.atualizar','uses'=>'Admin\ServicoController@atualizar']);
Route::get('/admin/servicos/deletar/{id}',['as'=>'admin.servicos.deletar','uses'=>'Admin\ServicoController@deletar']);

