<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
/**
 * Description of SitioController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class SitioController extends Controller {

  function getIndex(Request $request) {
    return view("Panel.subcategoria.subcategoria");
  }


  function getSitio(Request $request) {
    return view("Panel.sitio.sitio");
  }
  
  function getCrear(Request $request) {
    return view("Panel.sitio.crear");
  }
  
  function getEditar(Request $request) {
    return view("Panel.sitio.editar");
  }
  
  function getReporte(Request $request) {
    return view("Panel.sitio.reporte");
  }
  
  function getListar(Request $request) {
    return view("Panel.sitio.listar");
  }

}