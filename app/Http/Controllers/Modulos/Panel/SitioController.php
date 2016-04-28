<?php

namespace App\Http\Controllers\Modulos\Panel;

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
    return view("Modulos.Panel.subcategoria.subcategoria");
  }


  function getSitio(Request $request) {
    return view("Modulos.Panel.sitio.sitio");
  }
  
  function getCrear(Request $request) {
    return view("Modulos.Panel.sitio.crear");
  }
  
  function getEditar(Request $request) {
    return view("Modulos.Panel.sitio.editar");
  }
  
  function getReporte(Request $request) {
    return view("Modulos.Panel.sitio.reporte");
  }
  
  function getListar(Request $request) {
    return view("Modulos.Panel.sitio.listar");
  }

}