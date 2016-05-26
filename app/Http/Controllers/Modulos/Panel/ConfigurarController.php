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
      if (Session::has("usuarioAdmin")) {
    return view("Modulos.Panel.configurar.configurar");
  }else {
            return redirect(url("home/index"));
        }
    }


  function getConfigurar(Request $request) {
      if (Session::has("usuarioAdmin")) {
    return view("Modulos.Panel.categoria.configurar");
  }else {
            return redirect(url("home/index"));
        }
    }
  
//  function getCrear(Request $request) {
//      $dato_usuario = DB::select("SELECT * FROM bdp_dato_usuario");
//    return view("Modulos.Panel.configurar.crear");
//  }
  
  function postCrear(Request $request) {
       $dus_nombre = $_POST['dus_nombre'];
       $dus_apellidos = $_POST['dus_apellidos'];
       $dus_correo = $_POST['dus_correo'];
       $dus_genero = $_POST['dus_genero'];
       $dus_fecha_nacimiento = $_POST['dus_fecha_nacimiento'];
       $dus_facebook = $_POST['dus_facebook'];
       $dus_twitter = $_POST['dus_twitter'];
       $dus_google_plus = $_POST['dus_google_plus'];
       //$dus_avatar = $_FILES['dus_avatar']["name"]; 
       //$ruta = $_FILES["dus_avatar"]["tmp_name"];
       //$destino = "img/". $dus_avatar;
       //copy($ruta, $destino);
       
       DB::insert("INSERT INTO bdp_dato_usuario (dus_id,usu_id,dus_nombre,dus_apellido,dus_correo,dus_genero,dus_fecha_nacimiento,dus_facebook,dus_twitter,dus_google_plus) "
              . "VALUES(?,?,?,?,?,?,?,?,?,?)", 
              array($dus_nombre, $dus_apellidos, $dus_correo, $dus_genero, $dus_fecha_nacimiento, $dus_facebook, $dus_twitter, $dus_google_plus));
       
       
      
  }
          
//  function getEditar(Request $request) {
//    return view("Modulos.Panel.configurar.editar");
//  }
  
  function getReporte(Request $request) {
      if (Session::has("usuarioAdmin")) {
    return view("Modulos.Panel.configurar.reporte");
  }else {
            return redirect(url("home/index"));
        }
    }
  
  function getListar(Request $request) {
      if (Session::has("usuarioAdmin")) {
    return view("Modulos.Panel.configurar.listar");
  }else {
            return redirect(url("home/index"));
        }
    }

}