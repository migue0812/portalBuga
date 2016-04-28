<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
/**
 * Description of SubcategoriaController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class SubcategoriaController extends Controller {

  function getIndex(Request $request) {
    return view("Modulos.Panel.subcategoria.subcategoria");
  }


  function getSubcategoria(Request $request) {
    return view("Modulos.Panel.subcategoria.subcategoria");
  }
  
  function getCrear(Request $request) {
    return view("Modulos.Panel.subcategoria.crear");
  }
  
  function getEditar(Request $request) {
    return view("Modulos.Panel.subcategoria.editar");
  }
  
  function getReporte(Request $request) {
    return view("Modulos.Panel.subcategoria.reporte");
  }
  
  function getListar(Request $request) {
    return view("Modulos.Panel.subcategoria.listar");
  }

}