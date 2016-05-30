<?php

namespace App\Http\Controllers\Modulos\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

/**
 * Description of CuentaController
 *
 * @author David
 */
class CuentaController extends Controller {

    function getIndex(Request $request) {
        if (Session::has("usuarioLogueado")) {
            $idUsuario = Session::get("usuarioId");
            $usuario = DB::select("SELECT * FROM bdp_usuario, bdp_dato_usuario WHERE bdp_usuario.usu_id = ? "
                            . "AND bdp_usuario.usu_id=bdp_dato_usuario.usu_id", array($idUsuario));
            $usuario = $usuario[0];

            return view('Modulos.Usuario.editar', compact("usuario"));
        } else {
            return redirect(url("home/index"));
        }
        return view("Modulos.Usuario.editar");
    }

    function getCuenta(Request $request) {
        
    }

    function getEliminar(Request $request) {
        return view("Modulos.Usuario.eliminar");
    }

    function postEditar() {

        $idUsuario = Session::get("usuarioId");
        $pass1 = $_POST['password'];
        $pass2 = $_POST['password_confirmation'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $fecha = $_POST['fecha'];
        $genero = $_POST['genero'];

        $reglas = array(
            "password" => "required | confirmed",
            "nombre" => "required | max:40",
            "apellidos" => "required | max:60",
            "email" => "required | email",
            "fecha" => "required | date",
            "genero" => "required",
        );

        $mensajes = [
            "password.required" => "El campo 'contraseña' debe ser obligarorio",
            "password.confirmed" => "Las contraseñas deben ser iguales",
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "apellidos.required" => "El campo 'apellidos' debe ser obligarorio",
            "apellidos.max" => "El campo 'apellidos' debe tener máximo 60 caracteres",
            "email.required" => "El campo 'email' debe ser obligarorio",
            "email.email" => "El campo 'email' no contiene un correo válido",
            "fecha.required" => "El campo 'fecha de nacimiento' debe ser obligarorio",
            "fecha.date" => "El campo 'fecha de nacimiento' no contiene una fecha válida",
            "genero.required" => "El campo 'género' debe ser obligarorio",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('usuario/cuenta'))
                            ->withErrors($validacion->errors());
        }

        DB::update('UPDATE bdp_usuario SET usu_password = ?, '
                . 'usu_updated_at = CURRENT_TIMESTAMP WHERE usu_id = ?', array($pass1, $idUsuario));

        DB::update('UPDATE bdp_dato_usuario SET '
                . 'dus_nombre = ?, dus_apellidos = ?, dus_correo = ?, '
                . 'dus_genero = ?, dus_fecha_nacimiento = ?, dus_updated_at = CURRENT_TIMESTAMP WHERE usu_id = ?', array($pass1, $nombre, $apellidos,
            $email, $genero, $fecha, $idUsuario));

        Session::flash("usuarioEditado", "Se han editado los datos exitosamente");
        return redirect(url('usuario/cuenta'));
    }

    function getRecupass() {
        return view("Modulos.Seguridad.recuPass");
    }

    function postRecupass() {
        $email = $_POST['email'];
        $verificarEmail = DB::select('SELECT dus_correo FROM bdp_dato_usuario WHERE dus_correo = ?', array($email));

        if (!empty($verificarEmail)) {
            $datos = DB::select("SELECT usu_usuario, usu_password FROM "
                            . "bdp_usuario, bdp_dato_usuario WHERE dus_correo = ? "
                            . "AND bdp_usuario.usu_id=bdp_dato_usuario.usu_id", array($email));
            $usuario = $datos[0]->usu_usuario;
            $password = $datos[0]->usu_password;
            $mensaje = "Estimado usuario, sus datos de ingreso al Portal Buga, "
                    . "son: Usuario = $usuario, Contraseña = $password";
            $cabecera = 'From: portalbuga@gmail.com';
//               $longitud = 10;
//               $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
//               $cantCaracteres = strlen($cadena);
//               $password = "";
//               for($x=1; $x<=$longitud; $x++){
//                   $aleatorio = mt_rand(0, $cantCaracteres-1);
//                   $password .= substr($cadena, $aleatorio, 1);
//               }
//               
//               DB::update("UPDATE bdp_usuario, bdp_dato_usuario SET usu_password = ? "
//                       . "WHERE dus_correo = ? AND bdp_usuario.usu_id=bdp_dato_usuario.usu_id", 
//                       array($password, $email));
            mail($email, "Recuperación de Contraseña", $mensaje, $cabecera);
            Session::flash("correoEnviado", "Se han enviado los datos de usuario al correo");
        } else {
            Session::flash("correoNoExiste", "Este correo no se encuentra registrado");
        };
        return redirect(url('usuario/cuenta/recupass'));
    }

}
