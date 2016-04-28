<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
/**
 * Description of CategoriaController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class CategoriaController extends Controller {

  function getIndex(Request $request) {
    return view("Modulos.Panel.categoria.categoria");
  }


  function getCategoria(Request $request) {
    return view("Modulos.Panel.categoria.categoria");
  }
  
  function getCrear(Request $request) {
    return view("Modulos.Panel.categoria.crear");
  }
  
  function getEditar(Request $request) {
    return view("Modulos.Panel.categoria.editar");
  }
  
  function getReporte(Request $request) {
    return view("Modulos.Panel.categoria.reporte");
  }
  
  function getListar(Request $request) {
    return view("Modulos.Panel.categoria.listar");
  }

}