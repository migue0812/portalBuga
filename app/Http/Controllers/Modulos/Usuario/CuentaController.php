<?php

namespace App\Http\Controllers\Modulos\Usuario;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Session;
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
        if (Session::has("usuarioLogueado")) {
        $idUsuario = Session::get("usuarioId");
        $usuario = DB::select("SELECT * FROM bdp_dato_usuario WHERE usu_id = ?",
                array($idUsuario));
        $usuario = $usuario[0];
        
        return view("Modulos.Usuario.cuenta.editar", compact("usuario"));
    }else {
            return redirect(url("home/index"));
    } 
  }
  
  function getEliminar(Request $request) {
    return view("Modulos.Usuario.cuenta.eliminar");
  }

}