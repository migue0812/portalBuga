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
    return view("Modulos.Usuario.panel");
  }


  function getPanel(Request $request) {
    return view("Modulos.Usuario.panel");
  }
  
  function getEditar(Request $request) {
    return view("Modulos.Usuario.cuenta.editar");
  }
  
  function getEliminar(Request $request) {
    return view("Modulos.Usuario.cuenta.eliminar");
  }

}