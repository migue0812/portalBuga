<?php

namespace App\Http\Controllers\Modulos\Panel;

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
    return view("Modulos.Panel.evento.evento");
  }


  function getEvento(Request $request) {
    return view("Modulos.Panel.evento.evento");
  }
  
  function getCrear(Request $request) {
  $categorias = DB::select("SELECT * FROM bdp_categoria");
  $subcategoria = DB::select("SELECT * FROM bdp_subcategoria");
  $sitios= DB::select("SELECT * FROM bdp_sitio");
    return view("Modulos.Panel.evento.crear",compact('categorias','subcategoria','sitios'));
  }
  
  function getEditar(Request $request) {
    return view("Modulos.Panel.evento.editar");
  }
  
  function getReporte(Request $request) {
    return view("Modulos.Panel.evento.reporte");
  }

  function getListar(Request $request) {
      $eventos=DB::select("SELECT * FROM bdp_evento,bdp_estado,bdp_categoria,bdp_subcategoria WHERE bdp_evento.est_id=bdp_estado.est_id and "
                . "bdp_categoria.cat_id=bdp_evento.cat_id and bdp_subcategoria.subcat_id=bdp_evento.subcat_id");
    return view("Modulos.Panel.evento.listar" , compact('eventos'));
  }
  
  function getInhabilitar($id) {
            DB::update("UPDATE bdp_evento SET est_id = 0, eve_deleted_at = CURRENT_TIMESTAMP WHERE eve_id = ?", 
                    array($id));

           
            return redirect(url("admin/evento/listar"));
       
    }
    
    function getHabilitar($id) {
        
            DB::update("UPDATE bdp_evento SET est_id = 1, eve_deleted_at = NULL WHERE eve_id = ?", array($id));

           
            return redirect(url("admin/evento/listar"));
        
    }
  
  //Funciones Post 
  function postCrear(Request $request){
      $eve_nombre = $_POST['eve_nombre'];
      $eve_cat = $_POST['eve_cat'];
      $eve_subcat = $_POST['eve_subcat'];
      $valor_boleta = $_POST['valor_boleta'];
      $eve_direccion = $_POST['eve_direccion'];
      $eve_nombre_contacto = $_POST['eve_nombre_contacto'];
      $eve_correo_contacto = $_POST['eve_correo_contacto'];
      $eve_telefono_contacto = $_POST['eve_telefono_contacto'];
      $eve_hora = $_POST['eve_hora'];
      $eve_fecha_inicio = $_POST['eve_fecha_inicio'];
      $eve_fecha_fin = $_POST['eve_fecha_fin'];
      $eve_descripcion = $_POST['eve_descripcion'];
      $eve_foto = $_FILES["eve_foto"]["name"];
      $ruta = $_FILES["eve_foto"]["tmp_name"];
      $destino = "img/". $eve_foto;
      copy($ruta, $destino);
      
      
      //senticia Sql insertar datos
      DB::insert("INSERT INTO bdp_evento (cat_id,subcat_id,eve_nombre,eve_fecha_hora,eve_direccion,eve_nombre_contacto,eve_correo_contacto,eve_telefono_contacto,eve_valor_boleta,eve_descripcion,eve_fecha_inicio,eve_fecha_fin,est_id) "
              . "VALUES(?,?,?,?,?,?,?,?,?,?,?,?,1)", 
              array($eve_cat, $eve_subcat, $eve_nombre, $eve_hora, $eve_direccion, $eve_nombre_contacto, $eve_correo_contacto, $eve_telefono_contacto, $valor_boleta, $eve_descripcion, $eve_fecha_inicio,$eve_fecha_fin));
      
      //sentencia sql imagen
      $eve_id = DB::select('SELECT IFNULL(MAX(eve_id),0) AS eve_id FROM bdp_evento ORDER BY eve_id DESC LIMIT 1');
      $eve_id = $eve_id[0]->eve_id;
      
      //Insertar imagen
       DB::insert("INSERT INTO bdp_imagen (eve_id,img_ruta) VALUES (?,?)", array($eve_id, $destino));
       return view("Modulos.Panel.evento.listar");
      
  }
}