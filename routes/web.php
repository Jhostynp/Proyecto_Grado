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


Route::get('/provedor','ProvedorController@index')->name('provedor');

Route::get('/provedor/create','ProvedorController@create')->name('provedor.create');

Route::post('/provedor/store','ProvedorController@store')->name('provedor.store');

Route::get('/provedor/edit/{prov_id}','ProvedorController@edit')->name('provedor.edit');

Route::post('/provedor/update/{prov_id}','ProvedorController@update')->name('provedor.uptade');

Route::post('/provedor/destroy/{prov_id}','ProvedorController@destroy')->name('provedor.destroy');



Route::get('/productos','ProductosController@index')->name('productos');

Route::get('/productos/create','ProductosController@create')->name('productos.create');

Route::post('/productos/store','ProductosController@store')->name('productos.store');

Route::get('/productos/edit/{prod_id}','ProductosController@edit')->name('productos.edit');


Route::post('/productos/update/{prod_id}','ProductosController@update')->name('productos.update');

Route::post('/productos/destroy/{prod_id}','ProductosController@destroy')->name('productos.destroy');

Route::get('/productos/update/{prod_id}','ProductosController@update')->name('productos.uptade');

Route::post('/productos/destroy/{prod_id}','ProductosController@destroy')->name('productos.destroy');


Route::post('/productos/search','ProductosController@index')->name('productos.search');  


Route::post('/facturas/detalle','FacturasController@detalle')->name('facturas.detalle');



Route::post('/facturas/destroy/{fac_id}','FacturasController@destroy')->name('facturas.destroy');

Route::resource('facturas','FacturasController');

Route::get('/facturas_pdf/{fac_id}','FacturasController@facturas_pdf')->name('facturas.pdf');

Route::get('/facturas_anular/{fac_id}','FacturasController@facturas_anular')->name('facturas.anular');

Route::get('/facturas_desanular/{fac_id}','FacturasController@facturas_desanular')->name('facturas.desanular');

Route::post('/facturas/search','FacturasController@index')->name('facturas.search');  