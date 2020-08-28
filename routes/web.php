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
    return view('layouts.principal');
   // return view('welcome');
});


Route::get('/index', function () {
    //return view('layouts.principal');
});


Route::get('/dash', function () {
    return view('dashboard.dash');
});







Route::group(['prefix' => 'dash', 'as' => 'dash'], function () {
   
    Route::get('/', function () {
        return view('dashboard.principaldash');
    });
    
    Route::get('/admin', function () {
        return view('dashboard.admin.admindash');
    });

    Route::get('/user', function () {
        return view('dashboard.user.userdash');
    });

    Route::get('/admin/productos', 'ProductosController@index');
    Route::get('admin/usuarios', 'UsuariosController@index');
    Route::get('admin/qys', 'QySController@index');
    Route::get('admin/ofertas', 'OfertasController@index');
    Route::get('admin/categorias', 'CategoriasController@index');
    Route::get('admin/roles', 'RolesController@index');

    /*Route::post('admin/usuarios', 'UsuariosController@store');*/


    Route::resource('admin/usuarios', 'UsuariosController');
    Route::resource('admin/productos', 'ProductosController');
    Route::resource('admin/qys', 'QySController');
    Route::resource('admin/roles', 'RolesController');
    Route::resource('admin/categorias', 'CategoriasController');
});