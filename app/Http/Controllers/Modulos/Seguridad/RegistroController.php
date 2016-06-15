<?php

namespace App\Http\Controllers\Modulos\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Validator;

/**
 * Description of RegistroController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 * @author DRXMO
 */
class RegistroController extends Controller {

  function getIndex(Request $request) {
    return view("Modulos.Seguridad.registro");
  }

  function getRegistro(Request $request) {
    if (Session::has('usuarioAdmin') === true) {

      $roles = DB::select("SELECT * FROM bdp_rol");
      return view("Modulos.Panel.configurar.crear", compact("nombre", "roles"));
    } else {
      return view("Modulos.Seguridad.registro");
    }
  }

  function postRegistro(Request $request) {

    $usuario = filter_input(INPUT_POST, 'usuario');
//    $usuario = $_POST['usuario'];
//    $usuario= array();
//    $usuario = 'admin';
    $password = filter_input(INPUT_POST, 'password');
    $password_confirmation = filter_input(INPUT_POST, 'password_confirmation');
    $nombre = filter_input(INPUT_POST, 'nombre');
    $apellidos = filter_input(INPUT_POST, 'apellidos');
    $email = filter_input(INPUT_POST, 'email');
    $fecha = filter_input(INPUT_POST, 'fecha_nacimiento');
    $genero = filter_input(INPUT_POST, 'genero');
    $rol = filter_input(INPUT_POST, 'rol');
    $activado = filter_input(INPUT_POST, 'est_id');
    $twitter = filter_input(INPUT_POST, 'twitter');
    $facebook = filter_input(INPUT_POST, 'facebook');
    $google = filter_input(INPUT_POST, 'google');

    
//    $exists = DB::select('SELECT IFNULL(MAX(usu_id),0)+1 AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1');
    $exists1 = DB::select("SELECT usu_usuario FROM bdp_usuario WHERE usu_usuario = ? limit 1", array($usuario));
// 
//    var_dump($exists1);
    if (!empty($exists1)){


      Session::flash('exist', 'Usuario ya existe.');
      Session::flash('usuario', $usuario);
      Session::flash('email', $email);
      Session::flash('nombre', $nombre);
      Session::flash('apellido', $apellidos);
      Session::flash('fecha', $fecha);
      return redirect(url('registro/registro'));
//    return view('welcome');
    }

//$existsP = DB::table('bdp_dato_usuario')->where('dus_correo', '$email')->count();
    $existsP = DB::select("SELECT dus_correo FROM bdp_dato_usuario WHERE dus_correo = ? limit 1", array($email));

//    var_dump($existsP);
    if (!empty($existsP)) {
      Session::flash('exist', 'Correo ya está en uso.');
      Session::flash('usuario', $usuario);
      Session::flash('email', $email);
      Session::flash('nombre', $nombre);
      Session::flash('apellido', $apellidos);
      Session::flash('fecha', $fecha);
      return redirect(url('registro/registro'));
//    return view('welcome');
    }


    $usuarios = DB::select('SELECT IFNULL(MAX(usu_id),0)+1 AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1');
    $usu_id = $usuarios[0]->id;


    $usuarios = DB::select('SELECT IFNULL(MAX(dus_id),0)+1 AS id FROM bdp_dato_usuario ORDER BY id DESC LIMIT 1');
    $dus_id = $usuarios[0]->id;



    $reglas = array(
        "usuario" => "required | min:3",
        "password" => "required|min:3|confirmed",
        "password_confirmation" => "required | min:3",
        "nombre" => "required | max:40",
        "apellidos" => "required | max:60",
        "email" => "required | email",
        "fecha" => "date",
        "genero" => "required",
    );

    $mensajes = [
        "usuario.required" => "El campo 'usuario' es obligatorio",
        "usuario.min" => "El campo 'usuario' debe tener minimo 3 caracteres",
        "password.required" => "El campo 'password' debe ser obligatorio",
        "password.min" => "El campo 'password' debe tener minimo 3 caracteres",
        "password.confirmed" => "Confirmacion de contraseña no coincide",
        "password_confirmation.required" => "El campo 'confirmacion de password' debe ser obligatorio",
        "password_confirmation.min" => "El campo 'password' debe tener minimo 3 caracteres",
        "nombre.required" => "El campo 'nombre' debe ser obligatorio",
        "nombre.max" => "El campo 'nombre' debe tener mÃ¡ximo 40 caracteres",
        "apellidos.required" => "El campo 'apellidos' debe ser obligarorio",
        "apellidos.max" => "El campo 'apellidos' debe tener mÃ¡ximo 60 caracteres",
        "email.required" => "El campo 'email' debe ser obligarorio",
        "email.email" => "El campo 'email' no contiene un correo vÃ¡lido",
        "fecha.required" => "El campo 'fecha de nacimiento' debe ser obligarorio",
        "fecha.date" => "El campo 'fecha de nacimiento' no contiene una fecha vÃ¡lida",
        "genero.required" => "El campo 'gÃ©nero' debe ser obligarorio",
    ];

    $validacion = Validator::make($_POST, $reglas, $mensajes);

    if ($validacion->fails()) {
      return redirect(url('registro/registro'))
                      ->withErrors($validacion->errors());
    }







    if (($password) == ($password_confirmation)) {


      DB::insert("INSERT INTO bdp_usuario "
              . "( usu_id, usu_usuario , usu_password, est_id,"
              . " rol_id) VALUES (?,?,?,?,?)", array($usu_id, $usuario,
          $password, $activado, $rol));

      DB::insert("INSERT INTO bdp_dato_usuario "
              . "( dus_id, usu_id, dus_nombre , "
              . "dus_apellidos, dus_correo, dus_genero, "
              . "dus_fecha_nacimiento, dus_facebook, dus_twitter,"
              . " dus_google_plus) VALUES (?,?,?,?,?,?,?,?,?,?)", array($dus_id,
          $usu_id, $nombre, $apellidos, $email, $genero, $fecha, $facebook,
          $twitter, $google));

      Session::put('registroSuccess', 'Usuario creado exitosamente');

//    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));


      if (Session::has('usuarioAdmin') === true) {


        return redirect('registro/listar');
//            } elseif (Session::has('super') === true) {
//
//                return redirect(url("usuarios/usuarios/index"));
      } else {
        return redirect('login');
      }
    } else {
      return redirect(url("usuarios/usuarios/crear"));
    }



    return view("Modulos.Seguridad.registro");
  }

  function getListar(Request $request) {

    if (Session::has('usuarioAdmin') === true) {
      $usuarios = DB::select("SELECT * FROM bdp_usuario");
      $dato_usuario = DB::select("SELECT * FROM bdp_dato_usuario");

      return view("Modulos.Panel.configurar.listar", compact("usuarios", "dato_usuario"));
    } else {
      echo 'Permiso denegado';
      return redirect(url("home/index"));
    }
//    return view("Modulos.Panel.configurar.listar");
  }

  function getEditar($id) {


    if ((Session::has('usuarioAdmin') === true) or ( Session::has('usuarioLogueado') === true)) {



      $roles = DB::select("SELECT * FROM bdp_rol");

      $usuario = DB::select("SELECT * FROM bdp_usuario WHERE usu_id = ?", array($id));
      $dato_usuario = DB::select("SELECT * FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
      $usuario = $usuario[0];
      $dato_usuario = $dato_usuario[0];
//            $roles = DB::select("SELECT * FROM bdp_rol");
//            $roles = $roles[0];
      $rol1 = DB::select("SELECT rol_rol FROM bdp_rol WHERE rol_id = ?", array($usuario->rol_id));
      $rol = $rol1[0]->rol_rol;
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
//            $new_arr2[] = null;
//            foreach ($rol1 as $rol) {
//                $new_arr2[] = $rol->rol_rol;
//            }
//            $rol = implode($new_arr2);


      return view("Modulos.Panel.configurar.editar", compact("usuario", "dato_usuario", "nombre", "roles", "rol"));
    } else {
      echo 'Permiso denegado';
      return redirect(url("home/index"));
    }

//        return view("Modulos.Panel.configurar.editar");
  }

  function postEditar() {

    $id1 = filter_input(INPUT_POST, 'usu_id');
    $usuario = filter_input(INPUT_POST, 'usuario');
    $password = filter_input(INPUT_POST, 'password');
    $password_confirmation = filter_input(INPUT_POST, 'password_confirmation');
    $nombre = filter_input(INPUT_POST, 'nombre');
    $apellidos = filter_input(INPUT_POST, 'apellidos');
    $email = filter_input(INPUT_POST, 'email');
    $fecha = filter_input(INPUT_POST, 'fecha_nacimiento');
    $genero = filter_input(INPUT_POST, 'genero');
    $rol = filter_input(INPUT_POST, 'rol');
    $activado = filter_input(INPUT_POST, 'est_id');
    $twitter = filter_input(INPUT_POST, 'twitter');
    $facebook = filter_input(INPUT_POST, 'facebook');
    $google = filter_input(INPUT_POST, 'google');

    if ((Session::has('usuarioAdmin') === true) or ( Session::has('usuarioLogueado') === true)) {




      if (($password) == ($password_confirmation)) {

        DB::update("UPDATE bdp_usuario SET usu_usuario = ?, usu_password = ? , est_id = ? , rol_id = ? , usu_updated_at = CURRENT_TIMESTAMP "
                . " WHERE usu_id = ?", array($usuario, $password, $activado, $rol, $id1));

        DB::update("UPDATE bdp_dato_usuario SET  dus_nombre = ?, dus_apellidos = ?, dus_correo = ?, dus_genero = ?,"
                . " dus_fecha_nacimiento = ?, dus_facebook = ?, dus_twitter = ?,"
                . " dus_google_plus = ?, dus_updated_at = CURRENT_TIMESTAMP WHERE usu_id = ?", array($nombre, $apellidos, $email, $genero, $fecha, $facebook,
            $twitter, $google, $id1));

//                if (Session::has('usuarioAdmin') !== true) {
        Session::put('registroSuccess', 'Datos editados exitosamente');
//                }
      }

      if (Session::has('usuarioAdmin') === true) {


        return redirect('registro/listar');
//                } elseif (Session::has('super') === true) {
//
//                    return redirect(url("usuarios/usuarios/index"));
      } else {
        return redirect(url("home/index"));
      }
//            } else {
//                return redirect(url("usuarios/usuarios/crear"));
//            }
//            return redirect(url("usuarios/usuarios/index"));
    } else {
      echo 'Permiso denegado';
      return redirect(url("home/index"));
    }
  }

  function getEliminar($id) {



    if (Session::has('usuarioAdmin') === true) {

      DB::delete("DELETE FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
      DB::delete("DELETE FROM bdp_usuario WHERE usu_id = ?", array($id));

      return redirect(url("registro/listar"));
    } else {
      echo 'Permiso denegado';
      return redirect(url("index"));
    }
  }

  function getLogin(Request $request) {
    return view("Modulos.Seguridad.login");
  }

  function postLogin() {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $verificarUsuario = DB::select("SELECT bdp_usuario.usu_id, dus_genero, dus_avatar, rol_id FROM "
                    . "bdp_usuario, bdp_dato_usuario WHERE usu_deleted_at IS NULL "
                    . "AND est_id = '1' AND usu_usuario = ? AND "
                    . "usu_password = ? AND bdp_usuario.usu_id=bdp_dato_usuario.usu_id", array($user, $password));

    if (empty($verificarUsuario[0])) {
      Session::flash("usuarioInvalido", "Datos de usuario inválidos");
      return redirect('login');
    } elseif ($verificarUsuario[0]->rol_id !== 1) {
      Session::put("usuarioLogueado", $user);
      Session::put("usuarioId", $verificarUsuario[0]->usu_id);
      Session::put("usuarioAvatar", $verificarUsuario[0]->dus_avatar);
      Session::put("usuarioGenero", $verificarUsuario[0]->dus_genero);
      return redirect('home/index');
    } elseif ($verificarUsuario[0]->rol_id === 1) {
      Session::put("usuarioAdmin", "Admin");
      Session::put("usuarioId", $verificarUsuario[0]->usu_id);
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
