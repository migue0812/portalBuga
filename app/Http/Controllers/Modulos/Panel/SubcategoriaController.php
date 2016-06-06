<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Validator;

/**
 * Description of SubcategoriaController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class SubcategoriaController extends Controller {

    function getIndex(Request $request) {
        if (Session::has("usuarioAdmin")) {
        return view("Modulos.Panel.subcategoria.subcategoria");
    }else {
            return redirect(url("home/index"));
        }
    }

    function getSubcategoria(Request $request) {
        if (Session::has("usuarioAdmin")) {
        return view("Modulos.Panel.subcategoria.subcategoria");
    }else {
            return redirect(url("home/index"));
        }
    }

    function getCrear(Request $request) {

if (Session::has("usuarioAdmin")) {
        $categorias = DB::select("SELECT * FROM bdp_categoria");

        return view("Modulos.Panel.subcategoria.crear", compact("categorias"));

//    return view("Modulos.Panel.subcategoria.crear");
    }else {
            return redirect(url("home/index"));
        }
    }

    function postCrear() {

        $nombre = filter_input(INPUT_POST, 'nombre');
        $descripcion = filter_input(INPUT_POST, 'descripcion');
        $cat_id = filter_input(INPUT_POST, 'cat_id');
        
        $subcategoriaImg = $_FILES["imagen"]["name"];
        $subcategoriaRuta = $_FILES["imagen"]["tmp_name"];
        $subcategoriaDest = "img/" . $subcategoriaImg;
        copy($subcategoriaRuta, $subcategoriaDest);

         $reglas = array(
            "nombre" => "required",
            "descripcion" => "required",
            "imagen" => "image"
        );

        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "descripcion.required" => "El campo 'descripciÃ³n' debe ser obligarorio",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('admin/subcategoria/crear'))
                            ->withErrors($validacion->errors());
        }

DB::insert("INSERT INTO bdp_subcategoria (subcat_nombre, subcat_descripcion, cat_id, est_id) "
                . "VALUES(?,?,?,?)", array($nombre, $descripcion, $cat_id, 1));

        $id = DB::select('SELECT IFNULL(MAX(subcat_id),0) AS id FROM bdp_subcategoria ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;

        DB::insert("INSERT INTO bdp_imagen (subcat_id, img_ruta) VALUES (?,?)", array($id, $subcategoriaDest));

return redirect(url('admin/subcategoria/listar'));
}

    function getEditar($id) {
        if (Session::has("usuarioAdmin")) {
        $categorias = DB::select("SELECT * FROM bdp_categoria");
        $subcategoria = DB::select("SELECT * FROM bdp_subcategoria WHERE subcat_id = ?", array($id));
        $subcategoria = $subcategoria[0];


//        $subcategorias = array();

        return view("Modulos.Panel.subcategoria.editar", compact("categorias", "subcategoria"));
//        return view("Modulos.Panel.subcategoria.editar");
    }else {
            return redirect(url("home/index"));
        }
    }
    
function getBorrar($id) {

        if (Session::has('usuarioAdmin') === true) {


//            UPDATE `bdp_sitio` SET `sit_deleted_at` = NULL WHERE `bdp_sitio`.`sit_id` = 23

            $usu_deleted_at = date("Y-m-d\TH:i:s");


            DB::update("UPDATE bdp_subcategoria SET subcat_deleted_at = ? "
                    . " WHERE cat_id = ?", array($subcat_deleted_at, $id));

           
            return view("Modulos.Panel.subcategoria.listar");
        } else {
            echo 'Permiso denegado';
            return redirect(url("home/index"));
        }
    }
    
    function getDesactivar($id) {

        if (Session::has('usuarioAdmin') === true) {

$activado = DB::select("SELECT est_id FROM bdp_subcategoria WHERE subcat_id = ?", array($id));
$activado = $activado[0]->est_id;
 if ($activado == 1): $est_id=0; else: $est_id=1; endif;
//            UPDATE `bdp_sitio` SET `sit_deleted_at` = NULL WHERE `bdp_sitio`.`sit_id` = 23

//            $usu_deleted_at = date("Y-m-d\TH:i:s");


            DB::update("UPDATE bdp_subcategoria SET est_id = ? "
                    . " WHERE subcat_id = ?", array($est_id, $id));

           return redirect(url("admin/subcategoria/listar"));
//            return view("Modulos.Panel.subcategoria.listar");
        } else {
            echo 'Permiso denegado';
            return redirect(url("home/index"));
        }
    }
    
    function getReporte(Request $request) {
        return view("Modulos.Panel.subcategoria.reporte");
    }

    function getListar(Request $request) {
        
        if (Session::has('usuarioAdmin') === true) {
            $subcategorias = DB::select("SELECT * FROM bdp_subcategoria");
//            $dato_usuario = DB::select("SELECT * FROM bdp_dato_usuario");

            return view("Modulos.Panel.subcategoria.listar", compact("subcategorias", "dato_usuario"));
        } else {
            echo 'Permiso denegado';
            return redirect(url("home/index"));
        }
        
        
        return view("Modulos.Panel.subcategoria.listar");
    }

}
