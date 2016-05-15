<?php

Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
    'home/index' => "Modulos\Home\IndexController",
    'home/eventos' => "Modulos\Home\EventosController",
    'home/sitios' => "Modulos\Home\SitiosController",
    'home/categorias' => "Modulos\Home\CategoriasController",
    'home/subCat' => "Modulos\Home\subCatController",
    'itinerario' => "Modulos\Itinerario\ItinerarioController",
    'home/busqueda' => "Modulos\Home\BusquedaController",
]);


//Las rutas de los controladores del panel del admin estan en un
//contenedor o grupo de rutas , todo lo que este dentro
//de este grupo se le asigna un prefijo en este caso es "admin",
//Ej para llamarlo desde la url:
//  admin/bienvenido
//  admin/categoria
//
//Ej para llamarlo desde una vista:
//  url('admin/bienvenido');
//  url('admin/categoria');
Route::group(['prefix' => 'admin'], function () {

    Route::controllers([
        'bienvenido' => "Modulos\Panel\PanelController",
        'categoria' => "Modulos\Panel\CategoriaController",
        'subcategoria' => "Modulos\Panel\SubcategoriaController",
        'sitio' => "Modulos\Panel\SitioController",
        'evento' => "Modulos\Panel\EventoController",
        'configurar' => "Modulos\Panel\ConfigurarController",
        'reporte' => "Modulos\Panel\ReporteController",
    ]);
});

Route::controllers([
    'registro' => "Modulos\Seguridad\RegistroController",
]);

Route::get('login', 'Modulos\Seguridad\RegistroController@getLogin');




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
