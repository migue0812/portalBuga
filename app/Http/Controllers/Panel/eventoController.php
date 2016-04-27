<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
/**
 * Description of EventoController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class EventoController extends Controller {

  function getIndex(Request $request) {
    return view("Panel.evento.evento");
  }


  function getEvento(Request $request) {
    return view("Panel.evento.evento");
  }
  
  function getCrear(Request $request) {
    return view("Panel.evento.crear");
  }
  
  function getEditar(Request $request) {
    return view("Panel.evento.editar");
  }
  
  function getReporte(Request $request) {
    return view("Panel.evento.reporte");
  }

  function getListar(Request $request) {
    return view("Panel.evento.listar");
  }
}