<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
/**
 * Description of ConfigurarController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class ConfigurarController extends Controller {

  function getIndex(Request $request) {
    return view("Modulos.Panel.configurar.configurar");
  }


  function getConfigurar(Request $request) {
    return view("Modulos.Panel.categoria.configurar");
  }
  
  function getCrear(Request $request) {
    return view("Modulos.Panel.configurar.crear");
  }
  
  function getEditar(Request $request) {
    return view("Modulos.Panel.configurar.editar");
  }
  
  function getReporte(Request $request) {
    return view("Modulos.Panel.configurar.reporte");
  }
  
  function getListar(Request $request) {
    return view("Modulos.Panel.configurar.listar");
  }

}