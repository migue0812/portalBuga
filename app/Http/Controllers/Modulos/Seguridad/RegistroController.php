<?php

namespace App\Http\Controllers\Modulos\Seguridad;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
/**
 * Description of RegistroController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class RegistroController extends Controller {

  function getIndex(Request $request) {
    return view("Modulos.Seguridad.registro");
  }


  function getRegistro(Request $request) {
    return view("Modulos.Seguridad.registro");
  }
  
  function getLogin(Request $request) {
    return view("Modulos.Seguridad.login");
  }
  
}