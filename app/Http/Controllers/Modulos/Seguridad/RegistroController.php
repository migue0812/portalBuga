<?php

namespace App\Http\Controllers\Modulos\Seguridad;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Session;
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
  
   function postLogin() {
            $user = $_POST['user'];
            $password = $_POST['password'];

            $verificarUsuario = DB::select("SELECT bdp_usuario.usu_id, dus_genero, rol_id FROM "
                    . "bdp_usuario, bdp_dato_usuario WHERE usu_deleted_at IS NULL "
                            . "AND est_id = '1' AND usu_usuario = ? AND "
                            . "usu_password = ? AND bdp_usuario.usu_id=bdp_dato_usuario.usu_id", 
                    array($user, $password));

                if (empty($verificarUsuario[0])){
                    Session::flash("usuarioInvalido", "Datos de usuario inválidos");
                    return redirect('login');
                }
                elseif ($verificarUsuario[0]->rol_id !== 1) {
                    Session::put("usuarioLogueado", $user);
                    Session::put("usuarioId", $verificarUsuario[0]->usu_id);
                    Session::put("usuarioGenero", $verificarUsuario[0]->dus_genero);
                    return redirect('home/index');
                } elseif ($verificarUsuario[0]->rol_id === 1) {
                    Session::put("usuarioAdmin", "Admin");
                    Session::put("usuarioGenero", $verificarUsuario[0]->dus_genero);
                    return redirect('home/index');
            }
    }
    
     function getLogout() {
        Session::forget("usuarioLogueado");
        Session::forget("usuarioId");
        Session::forget("usuarioGenero");
        Session::forget("usuarioAdmin");
        return redirect('home/index');
    }
  
}