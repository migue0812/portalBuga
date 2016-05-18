<?php

namespace App\Http\Controllers\Modulos\Usuario;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
/**
 * Description of CuentaController
 *
 * @author David
 */
class CuentaController extends Controller {

  function getIndex(Request $request) {
    return view("Modulos.Usuario.editar");
  }


  function getCuenta(Request $request) {
    return view("Modulos.Usuario.editar");
  }
 
  function getEliminar(Request $request) {
    return view("Modulos.Usuario.eliminar");
  }

}