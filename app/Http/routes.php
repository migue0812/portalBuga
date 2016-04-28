<?php

Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
    'home/index' => "Modulos\Home\IndexController",
    'home/eventos' => "Modulos\Home\EventosController",
    'home/sitios' => "Modulos\Home\SitiosController",
    'home/categorias' => "Modulos\Home\CategoriasController",
]);

//Rutas del panel administrador
Route::group(['prefix' => 'admin'], function () {
  
Route::controllers([
    'bienvenido' => "Panel\PanelController",
    'categoria' => "Panel\CategoriaController",
    'subcategoria' => "Panel\SubcategoriaController",
    'sitio' => "Panel\SitioController",
    'evento' => "Panel\EventoController",
    'configurar' => "Panel\ConfigurarController",
    
]);
});


/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {
    //
});
