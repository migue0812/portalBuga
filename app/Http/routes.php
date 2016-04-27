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
