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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');

Route::get('/usuarios/create','UsuariosController@create')->name('usuarios.create');

Route::post('/usuarios/store','UsuariosController@store')->name('usuario.store');

Route::get('/usuarios/edit/{usu_id}','UsuariosController@edit')->name('usuarios.edit');

Route::post('/usuario/update/{usu_id}','UsuariosController@update')->name('usuario.uptade');

Route::post('/usuario/destroy/{usu_id}','UsuariosController@destroy')->name('usuario.destroy');



Route::get('/categorias','CategoriasController@index')->name('categorias');

Route::get('/categorias/create','CategoriasController@create')->name('categorias.create');

Route::post('/categorias/store','CategoriasController@store')->name('categoria.store');

Route::get('/categorias/edit/{cat_id}','CategoriasController@edit')->name('categorias.edit');

Route::post('/categoria/update/{cat_id}','CategoriasController@update')->name('categoria.uptade');

Route::post('/categoria/destroy/{cat_id}','CategoriasController@destroy')->name('categoria.destroy');


Route::get('/clientes','ClientesController@index')->name('clientes');

Route::get('/clientes/create','ClientesController@create')->name('clientes.create');

Route::post('/clientes/store','ClientesController@store')->name('clientes.store');

Route::get('/clientes/edit/{cli_id}','ClientesController@edit')->name('clientes.edit');

Route::post('/clientes/update/{cli_id}','ClientesController@update')->name('clientes.uptade');

Route::post('/clientes/destroy/{cli_id}','ClientesController@destroy')->name('clientes.destroy');



Route::post('/clientes/destroy/{cli_id}','ClientesController@destroy')->name('clientes.destroy');