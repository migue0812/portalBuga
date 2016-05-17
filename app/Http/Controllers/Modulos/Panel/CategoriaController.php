<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
/**
 * Description of CategoriaController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class CategoriaController extends Controller {

  function getIndex(Request $request) {
    return view("Modulos.Panel.categoria.categoria");
  }


  function getCategoria(Request $request) {
    return view("Modulos.Panel.categoria.categoria");
  }
  
  function getCrear(Request $request) {
    return view("Modulos.Panel.categoria.crear");
  }
  
  function postCrear(Request $request){
      $cat_nombre = $_POST['cat_nombre'];
      $cat_descripcion = $_POST['cat_descripcion'];
      
      $categoriaImg = $_FILES["imagen"]["name"];
        $categoriaRuta = $_FILES["imagen"]["tmp_name"];
        $categoriaDest = "img/" . $categoriaImg;
        copy($categoriaRuta, $categoriaDest);
      
      DB::insert("INSERT INTO bdp_categoria (cat_nombre, cat_descripcion) "
              . "VALUES(?,?)", 
              array($cat_nombre, $cat_descripcion));
      
      $id = DB::select('SELECT IFNULL(MAX(cat_id),0) AS id FROM bdp_categoria ORDER BY id DESC LIMIT 1');
      $id = $id[0]->id;
      
      DB::insert("INSERT INTO bdp_imagen (cat_id, img_ruta) VALUES (?,?)", array($id, $categoriaDest));
      
  }
  
  function getEditar(Request $request) {
    return view("Modulos.Panel.categoria.editar");
  }
  
  function getReporte(Request $request) {
    return view("Modulos.Panel.categoria.reporte");
  }
  
  function getListar(Request $request) {
    return view("Modulos.Panel.categoria.listar");
  }

}