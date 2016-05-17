<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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

    function postCrear(Request $request) {
        $cat_nombre = $_POST['cat_nombre'];
        $cat_descripcion = $_POST['cat_descripcion'];

        $categoriaImg = $_FILES["imagen"]["name"];
        $categoriaRuta = $_FILES["imagen"]["tmp_name"];
        $categoriaDest = "img/" . $categoriaImg;
        copy($categoriaRuta, $categoriaDest);


        $reglas = array(
            "cat_nombre" => "required| unique:bdp_categoria,cat_nombre",
            "cat_descripcion" => "required",
            "imagen" => "image"
        );

        $mensajes = [
            "cat_nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "cat_nombre.unique" => "El nombre " . "'" . $cat_nombre . "'" . " ya existe en la base de datos",
            "cat_descripcion.required" => "El campo 'descripciÃ³n' debe ser obligarorio",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('admin/categoria/crear'))
                            ->withErrors($validacion->errors());
        }


        DB::insert("INSERT INTO bdp_categoria (cat_nombre, cat_descripcion) "
                . "VALUES(?,?)", array($cat_nombre, $cat_descripcion));

        $id = DB::select('SELECT IFNULL(MAX(cat_id),0) AS id FROM bdp_categoria ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;

        DB::insert("INSERT INTO bdp_imagen (cat_id, img_ruta) VALUES (?,?)", array($id, $categoriaDest));

        return view("Modulos.Panel.categoria.crear");
    }

    function getEditar($id) {
        $categoria = DB::select("SELECT * FROM bdp_categoria, bdp_imagen WHERE bdp_categoria.cat_id = ?"
                   . " AND bdp_imagen.cat_id = bdp_categoria.cat_id", array($id));
        $categoria = $categoria[0];
        return view("Modulos.Panel.categoria.editar", compact('categoria'));
    }

    function postEditar(Request $request) {
        $cat_nombre = $_POST['cat_nombre'];
        $cat_descripcion = $_POST['cat_descripcion'];
        $cat_id = $_POST["cat_id"];

        $categoriaImg = $_FILES["imagen"]["name"];
        $categoriaRuta = $_FILES["imagen"]["tmp_name"];
        $categoriaDest = "img/" . $categoriaImg;
        if ($categoriaRuta !== "" && $categoriaDest !== "") {
            copy($categoriaRuta, $categoriaDest);
        }
        
         $reglas = array(
            "cat_nombre" => "required| unique:bdp_categoria,cat_nombre",
            "cat_descripcion" => "required",
            "imagen" => "image"
        );

        $mensajes = [
            "cat_nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "cat_nombre.unique" => "El nombre " . "'" . $cat_nombre . "'" . " ya existe en la base de datos",
            "cat_descripcion.required" => "El campo 'descripciÃ³n' debe ser obligarorio",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];
        
        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('admin/categoria/editar'))
                            ->withErrors($validacion->errors());
        }
        DB::update("UPDATE bdp_categoria SET cat_nombre = ?, cat_descripcion = ?,"
                .  array($cat_nombre, $cat_descripcion));

        if ($sitioRuta !== "" && $sitioDest !== "") {
            $img = DB::select("SELECT * FROM bdp_imagen WHERE sit_id = ?", array($sitId));
            $img = $img[0]->img_ruta;
            unlink($img);
            DB::insert("UPDATE bdp_imagen SET img_ruta = ? WHERE sit_id = ?", array($sitioDest, $sitId));
        }

        Session::flash("editar", "Sitio editado exitosamente");
        return redirect(url("admin/sitio/listar"));
    
        
        
        }

    
    
    
    function getReporte(Request $request) {
        return view("Modulos.Panel.categoria.reporte");
    }

    function getListar(Request $request) {
        
        $categorias = DB::select("SELECT * FROM bdp_categoria, bdp_estado WHERE bdp_categoria.est_id=bdp_estado.est_id ");
        
        return view("Modulos.Panel.categoria.listar", compact("categorias"));
        
    }
    
    function getInhabilitar($id) {
        DB::update("UPDATE bdp_categoria SET est_id = 0, cat_deleted_at = CURRENT_TIMESTAMP WHERE cat_id = ?", array($id));

        Session::flash("inhabilitar", "Se ha inhabilitado la categoria exitosamente");
        return redirect(url("admin/categoria/listar"));
    }

    function getHabilitar($id) {

        DB::update("UPDATE bdp_categoria SET est_id = 1, cat_deleted_at = NULL WHERE cat_id = ?", array($id));

        Session::flash("habilitar", "Se ha habilitado la categoria exitosamente");
        return redirect(url("admin/categoria/listar"));
    }

}
