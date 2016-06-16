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
    
    function getFiltro(Request $request) {
        if (Session::has("usuarioAdmin")) {
            return view("Modulos.Panel.subcategoria.filtro");
        } else {
            return redirect(url("home/index"));
        }
    }
    
    function postFiltro(Request $request) {
        $buscar = $_POST['buscar'];
        $subcategorias = DB::select("SELECT * FROM bdp_subcategoria, bdp_categoria, "
                    . "bdp_estado WHERE bdp_subcategoria.cat_id=bdp_categoria.cat_id "
                    . "AND bdp_subcategoria.est_id=bdp_estado.est_id AND subcat_nombre LIKE '%$buscar%'");

            return view("Modulos.Panel.subcategoria.listar", compact("subcategorias"));
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
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
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
        
      Session::flash("registrar", "Subcategoría registrada exitosamente");

return redirect(url('admin/subcategoria/listar'));
}

    function getEditar($id) {
        if (Session::has("usuarioAdmin")) {
        $categorias = DB::select("SELECT * FROM bdp_categoria");
        $subcategoria = DB::select("SELECT * FROM bdp_subcategoria, bdp_categoria "
                . "WHERE subcat_id = ? AND bdp_subcategoria.cat_id=bdp_categoria.cat_id", array($id));
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
    
    function getInhabilitar($id) {
        if (Session::has("usuarioAdmin")) {
        DB::update("UPDATE bdp_subcategoria SET est_id = 0, subcat_deleted_at = CURRENT_TIMESTAMP WHERE "
                . "subcat_id = ?", array($id));

        Session::flash("inhabilitar", "Se ha inhabilitado la subcategoria exitosamente");
        return redirect(url("admin/subcategoria/listar"));
    }else {
            return redirect(url("home/index"));
        }
    }
    
    function getReporte(Request $request) {
        return view("Modulos.Panel.subcategoria.reporte");
    }

    function getListar(Request $request) {
        
        if (Session::has('usuarioAdmin') === true) {
            $subcategorias = DB::select("SELECT * FROM bdp_subcategoria, bdp_categoria, "
                    . "bdp_estado WHERE bdp_subcategoria.cat_id=bdp_categoria.cat_id "
                    . "AND bdp_subcategoria.est_id=bdp_estado.est_id");
//            $dato_usuario = DB::select("SELECT * FROM bdp_dato_usuario");

            return view("Modulos.Panel.subcategoria.listar", compact("subcategorias", "dato_usuario"));
        } else {
            echo 'Permiso denegado';
            return redirect(url("home/index"));
        }
        
        
        return view("Modulos.Panel.subcategoria.listar");
    }
    
     function postEditar() {

        $nombre = filter_input(INPUT_POST, 'nombre');
        $descripcion = filter_input(INPUT_POST, 'descripcion');
        $cat_id = filter_input(INPUT_POST, 'cat_id');
        $subcat_id = filter_input(INPUT_POST, 'subcat_id');
        
        $subcategoriaImg = $_FILES["imagen"]["name"];
        $subcategoriaRuta = $_FILES["imagen"]["tmp_name"];
        $subcategoriaDest = "img/" . $subcategoriaImg;
        if ($subcategoriaRuta !== "" && $subcategoriaDest !== "") {
            copy($subcategoriaRuta, $subcategoriaDest);
        }

         $reglas = array(
            "nombre" => "required",
            "descripcion" => "required",
            "imagen" => "image"
        );

        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('admin/subcategoria/editar/' . $subcat_id))
                            ->withErrors($validacion->errors());
        }

DB::update("UPDATE bdp_subcategoria SET cat_id = ?, subcat_nombre = ?, subcat_descripcion = ?, "
        . "subcat_updated_at = CURRENT_TIMESTAMP WHERE subcat_id = ?",
                array($cat_id, $nombre, $descripcion, $subcat_id));

       if ($subcategoriaRuta !== "" && $subcategoriaDest !== "") {
            $img = DB::select("SELECT * FROM bdp_imagen WHERE subcat_id = ?", array($subcat_id));
            $img = $img[0]->img_ruta;
            unlink($img);
            DB::insert("UPDATE bdp_imagen SET img_ruta = ? WHERE subcat_id = ?", array($subcategoriaDest, $subcat_id));
        }

        Session::flash("editar", "Subcategoría editada exitosamente");
        return redirect(url("admin/subcategoria/listar"));
}

function getHabilitar($id) {
        if (Session::has("usuarioAdmin")) {

        DB::update("UPDATE bdp_subcategoria SET est_id = 1, subcat_deleted_at = NULL WHERE "
                . "subcat_id = ?", array($id));

        Session::flash("habilitar", "Se ha habilitado la subcategoria exitosamente");
        return redirect(url("admin/subcategoria/listar"));
    }else {
            return redirect(url("home/index"));
        }
    }

}
