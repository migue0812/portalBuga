<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Session;
/**
 * Description of SitioController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class SitioController extends Controller {

  function getIndex(Request $request) {
    return view("Modulos.Panel.subcategoria.subcategoria");
  }


  function getSitio(Request $request) {
    return view("Modulos.Panel.sitio.sitio");
  }
  
  function getCrear(Request $request) {
    return view("Modulos.Panel.sitio.crear");
  }
  
  function postCrear() {
        $sitNombre = $_POST["nombre"];
        $sitCategoria = $_POST["categoria"];
        $sitSubCategoria = $_POST["subcategoria"];
        $sitDireccion = $_POST["direccion"];
        $sitTelefono = $_POST["telefono"];
        $sitDescripcion = $_POST["descripcion"];

        $sitioImg = $_FILES["imagen"]["name"];
        $sitioRuta = $_FILES["imagen"]["tmp_name"];
        $sitioDest = "img/" . $sitioImg;
        copy($sitioRuta, $sitioDest);

        $reglas = array(
            "nombre" => "required | max:40 | unique:bdp_sitio,sit_nombre",
            "direccion" => "required | max:40",
            "telefono" => "required | integer | min:7",
            "descripcion" => "required | min:30",
            "imagen" => "image"
        );

        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "nombre.unique" => "El nombre " . "'" . $sitNombre . "'" . " ya existe en la base de datos",
            "direccion.required" => "El campo 'dirección' debe ser obligarorio",
            "direccion.max" => "El campo 'dirección' debe tener máximo 40 caracteres",
            "telefono.required" => "El campo 'teléfono' debe ser obligarorio",
            "telefono.min" => "El campo 'teléfono' debe tener minímo 7 caracteres",
            "telefono.integer" => "El campo 'teléfono' debe ser un valor numérico",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "descripcion.min" => "El campo 'descripción' debe tener minímo 30 caracteres",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('admin/sitio/crear'))
                            ->withErrors($validacion->errors());
        }

        DB::insert("INSERT INTO bdp_sitio (sit_nombre, sit_descripcion, "
                . "cat_id, subcat_id, sit_direccion, sit_telefono, sit_latitud, sit_longitud,"
                . "est_id, usu_id) VALUES (?,?,?,?,?,?,?,?,?,?)", array($sitNombre,
            $sitDescripcion, $sitCategoria, $sitSubCategoria, $sitDireccion,
            $sitTelefono, 101010101010, 1100110011, 1, 1));

        $id = DB::select('SELECT IFNULL(MAX(sit_id),0) AS id FROM bdp_sitio ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;

        DB::insert("INSERT INTO bdp_imagen (sit_id, img_ruta) VALUES (?,?)", array($id, $sitioDest));

        Session::flash("registrar", "Sitio registrado exitosamente");

        return redirect(url('admin/sitio/crear'));
    }
  
  function getEditar($id) {
      $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen, bdp_categoria, bdp_subcategoria WHERE bdp_sitio.sit_id = ? "
                            . "AND bdp_imagen.sit_id = bdp_sitio.sit_id AND bdp_sitio.cat_id=bdp_categoria.cat_id "
              . "AND bdp_sitio.subcat_id=bdp_subcategoria.subcat_id", array($id));
            $sitios = $sitios[0];
            $categorias = DB::select("SELECT * FROM bdp_categoria");
            $subcategorias = DB::select("SELECT * FROM bdp_subcategoria");
    return view("Modulos.Panel.sitio.editar", compact("sitios"), compact("categorias"), compact("subcategorias"));
  }
  
  function getReporte(Request $request) {
    return view("Modulos.Panel.sitio.reporte");
  }
  
  function postEditar() {
        $sitNombre = $_POST["nombre"];
        $sitCategoria = $_POST["categoria"];
        $sitSubcategoria = $_POST["subcategoria"];
        $sitDireccion = $_POST["direccion"];
        $sitTelefono = $_POST["telefono"];
        $sitDescripcion = $_POST["descripcion"];
        $sitId = $_POST["id"];

        $reglas = array(
            "nombre" => "required | max:40",
            "direccion" => "required | max:40",
            "telefono" => "required | integer | min:7",
            "descripcion" => "required | min:30",
            "imagen" => "image"
        );

        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "direccion.required" => "El campo 'dirección' debe ser obligarorio",
            "direccion.max" => "El campo 'dirección' debe tener máximo 40 caracteres",
            "telefono.required" => "El campo 'teléfono' debe ser obligarorio",
            "telefono.min" => "El campo 'teléfono' debe tener minímo 7 caracteres",
            "telefono.integer" => "El campo 'teléfono' debe ser un valor numérico",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "descripcion.min" => "El campo 'descripción' debe tener minímo 30 caracteres",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('admin/sitio/editar'))
                            ->withErrors($validacion->errors());
        }

        DB::update("UPDATE bdp_sitio SET sit_nombre = ?, cat_id = ?, subcat_id = ?, sit_direccion = ?, "
                . "sit_telefono = ?, sit_descripcion = ?, sit_updated_at = CURRENT_TIMESTAMP WHERE sit_id = ?", 
                array($sitNombre, $sitCategoria, $sitSubcategoria, $sitDireccion,
            $sitTelefono, $sitDescripcion, $sitId));

        Session::flash("editar", "Sitio editado exitosamente");
        return redirect(url("admin/sitio/listar"));
    }
  
  function getListar(Request $request) {
      $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_estado, bdp_categoria, bdp_subcategoria"
              . " WHERE bdp_sitio.est_id=bdp_estado.est_id AND "
              . "bdp_sitio.cat_id=bdp_categoria.cat_id AND "
              . "bdp_sitio.subcat_id=bdp_subcategoria.subcat_id");
    return view("Modulos.Panel.sitio.listar", compact("sitios"));
  }
  
  function getInhabilitar($id) {
            DB::update("UPDATE bdp_sitio SET est_id = 0, sit_deleted_at = CURRENT_TIMESTAMP WHERE sit_id = ?", 
                    array($id));

            Session::flash("inhabilitar", "Se ha inhabilitado el sitio exitosamente");
            return redirect(url("admin/sitio/listar"));
       
    }
    
    function getHabilitar($id) {
        
            DB::update("UPDATE bdp_sitio SET est_id = 1, sit_deleted_at = NULL WHERE sit_id = ?", array($id));

            Session::flash("habilitar", "Se ha habilitado el sitio exitosamente");
            return redirect(url("admin/sitio/listar"));
        
    }

}