<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

/**
 * Description of SitioController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class SitioController extends Controller {

    function getIndex(Request $request) {
        if (Session::has("usuarioAdmin")) {
            return view("Modulos.Panel.subcategoria.subcategoria");
        } else {
            return redirect(url("home/index"));
        }
    }

    function getSitio(Request $request) {
        if (Session::has("usuarioAdmin")) {
            return view("Modulos.Panel.sitio.sitio");
        } else {
            return redirect(url("home/index"));
        }
    }

    function getFiltro(Request $request) {
        if (Session::has("usuarioAdmin")) {
            return view("Modulos.Panel.sitio.filtro");
        } else {
            return redirect(url("home/index"));
        }
    }

    function postFiltro(Request $request) {
        $buscar = $_POST['buscar'];
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_estado, bdp_categoria, bdp_subcategoria"
                        . " WHERE bdp_sitio.est_id=bdp_estado.est_id AND "
                        . "bdp_sitio.cat_id=bdp_categoria.cat_id AND "
                        . "bdp_sitio.subcat_id=bdp_subcategoria.subcat_id AND sit_nombre LIKE '%$buscar%'");
        return view("Modulos.Panel.sitio.listar", compact("sitios"));
    }

    function getCrear(Request $request) {
        if (Session::has("usuarioAdmin")) {
            $categorias = DB::select("SELECT * FROM bdp_categoria");
            $subcategorias = DB::select("SELECT * FROM bdp_subcategoria");
            return view("Modulos.Panel.sitio.crear", compact("categorias"), compact("subcategorias"));
        } else {
            return redirect(url("home/index"));
        }
    }

    function postCrear() {
        $idUsuario = Session::get("usuarioId");
        $sitNombre = $_POST["nombre"];
        $sitCategoria = $_POST["categoria"];
        $sitSubCategoria = $_POST["subcategoria"];
        $sitDireccion = $_POST["direccion"];
        $sitTelefono = $_POST["telefono"];
        $sit_etiqueta = $_POST["sit_etiqueta"];
        $sitDescripcion = $_POST["descripcion"];

        $sitioImg1 = $_FILES["imagen1"]["name"];
        $sitioRuta1 = $_FILES["imagen1"]["tmp_name"];
        $sitioDest1 = "img/" . $sitioImg1;
        if ($sitioRuta1 !== "" && $sitioDest1 !== "") {
            copy($sitioRuta1, $sitioDest1);
        }

        $sitioImg2 = $_FILES["imagen2"]["name"];
        $sitioRuta2 = $_FILES["imagen2"]["tmp_name"];
        $sitioDest2 = "img/" . $sitioImg2;
        if ($sitioRuta2 !== "" && $sitioDest2 !== "") {
            copy($sitioRuta2, $sitioDest2);
        }

        $sitioImg3 = $_FILES["imagen3"]["name"];
        $sitioRuta3 = $_FILES["imagen3"]["tmp_name"];
        $sitioDest3 = "img/" . $sitioImg3;
        if ($sitioRuta3 !== "" && $sitioDest3 !== "") {
            copy($sitioRuta3, $sitioDest3);
        }

        $reglas = array(
            "nombre" => "required | max:40 | unique:bdp_sitio,sit_nombre",
            "direccion" => "required | max:40",
            "sit_etiqueta" => "required | min:10",
            "descripcion" => "required | min:30",
            "imagen" => "image"
        );

        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "nombre.unique" => "El nombre " . "'" . $sitNombre . "'" . " ya existe en la base de datos",
            "direccion.required" => "El campo 'dirección' debe ser obligarorio",
            "direccion.max" => "El campo 'dirección' debe tener máximo 40 caracteres",
            "sit_etiqueta.required" => "El campo palabras claves es obligatorio",
            "sit_etiqueta.min" => "El campo palabras clave debe tener minimo 10 caracteres",
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
                . "est_id, usu_id,sit_etiqueta) VALUES (?,?,?,?,?,?,?,?,?,?,?)", array($sitNombre,
            $sitDescripcion, $sitCategoria, $sitSubCategoria, $sitDireccion,
            $sitTelefono, 101010101010, 1100110011, 1, $idUsuario,$sit_etiqueta));

        $id = DB::select('SELECT IFNULL(MAX(sit_id),0) AS id FROM bdp_sitio ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;

        if ($sitioRuta1 !== "" && $sitioDest1 !== "") {
            DB::insert("INSERT INTO bdp_imagen (sit_id, img_ruta) VALUES (?,?)", array($id, $sitioDest1));
        }
        if ($sitioRuta2 !== "" && $sitioDest2 !== "") {
            DB::insert("INSERT INTO bdp_imagen (sit_id, img_ruta) VALUES (?,?)", array($id, $sitioDest2));
        }
        if ($sitioRuta3 !== "" && $sitioDest3 !== "") {
            DB::insert("INSERT INTO bdp_imagen (sit_id, img_ruta) VALUES (?,?)", array($id, $sitioDest3));
        }
        Session::flash("registrar", "Sitio registrado exitosamente");

        return redirect(url('admin/sitio/crear'));
    }

    function getEditar($id) {
        if (Session::has("usuarioAdmin")) {
            $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen, bdp_categoria, bdp_subcategoria WHERE bdp_sitio.sit_id = ? "
                            . "AND bdp_imagen.sit_id = bdp_sitio.sit_id AND bdp_sitio.cat_id=bdp_categoria.cat_id "
                            . "AND bdp_sitio.subcat_id=bdp_subcategoria.subcat_id", array($id));
            $sitios = $sitios[0];
            $categorias = DB::select("SELECT * FROM bdp_categoria");
            $subcategorias = DB::select("SELECT * FROM bdp_subcategoria");
            $imagenes = DB::select("SELECT * FROM bdp_imagen WHERE sit_id = ?", array($id));
            return view("Modulos.Panel.sitio.editar", compact('sitios', 'categorias', 'subcategorias', 'imagenes'));
        } else {
            return redirect(url("home/index"));
        }
    }

    function getReporte(Request $request) {
        if (Session::has("usuarioAdmin")) {
            return view("Modulos.Panel.sitio.reporte");
        } else {
            return redirect(url("home/index"));
        }
    }

    function postEditar() {
        $sitNombre = $_POST["nombre"];
        $sitCategoria = $_POST["categoria"];
        $sitSubcategoria = $_POST["subcategoria"];
        $sitDireccion = $_POST["direccion"];
        $sitTelefono = $_POST["telefono"];
        $sit_etiqueta=$_POST["sit_etiqueta"];
        $sitDescripcion = $_POST["descripcion"];
        $sitId = $_POST["id"];
        if (!empty($_POST["img1"])) {
            $imgId1 = $_POST["img1"];
        }
        if (!empty($_POST["img2"])) {
            $imgId2 = $_POST["img2"];
        }
        if (!empty($_POST["img3"])) {
            $imgId3 = $_POST["img3"];
        }

        $sitioImg1 = $_FILES["imagen1"]["name"];
        $sitioRuta1 = $_FILES["imagen1"]["tmp_name"];
        $sitioDest1 = "img/" . $sitioImg1;
        if ($sitioRuta1 !== "" && $sitioDest1 !== "") {
            copy($sitioRuta1, $sitioDest1);
        }

        $sitioImg2 = $_FILES["imagen2"]["name"];
        $sitioRuta2 = $_FILES["imagen2"]["tmp_name"];
        $sitioDest2 = "img/" . $sitioImg2;
        if ($sitioRuta2 !== "" && $sitioDest2 !== "") {
            copy($sitioRuta2, $sitioDest2);
        }

        $sitioImg3 = $_FILES["imagen3"]["name"];
        $sitioRuta3 = $_FILES["imagen3"]["tmp_name"];
        $sitioDest3 = "img/" . $sitioImg3;
        if ($sitioRuta3 !== "" && $sitioDest3 !== "") {
            copy($sitioRuta3, $sitioDest3);
        }

        $reglas = array(
            "nombre" => "required | max:40",
            "direccion" => "required | max:40",
            "sit_etiqueta" => "required | min:10",
            "descripcion" => "required | min:30",
            "imagen" => "image"
        );

        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "direccion.required" => "El campo 'dirección' debe ser obligarorio",
            "direccion.max" => "El campo 'dirección' debe tener máximo 40 caracteres",
             "sit_etiqueta.required" => "El campo palabras claves es obligatorio",
            "sit_etiqueta.min" => "El campo palabras clave debe tener minimo 10 caracteres",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "descripcion.min" => "El campo 'descripción' debe tener minímo 30 caracteres",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('admin/sitio/editar/' . $sitId))
                            ->withErrors($validacion->errors());
        }

        DB::update("UPDATE bdp_sitio SET sit_nombre = ?, cat_id = ?, subcat_id = ?, sit_direccion = ?, "
                . "sit_telefono = ?, sit_descripcion = ?, sit_updated_at = CURRENT_TIMESTAMP WHERE sit_id = ? , sit_etiqueta=?", array($sitNombre, $sitCategoria, $sitSubcategoria, $sitDireccion,
            $sitTelefono, $sitDescripcion, $sitId,$sit_etiqueta));

        $img = DB::select("SELECT img_ruta FROM bdp_imagen WHERE sit_id = ?", array($sitId));

        if ($sitioRuta1 !== "" && $sitioDest1 !== "") {
            if (!empty($img[0]->img_ruta)) {
                $img1 = $img[0]->img_ruta;
                unlink($img1);
                DB::update("UPDATE bdp_imagen SET img_ruta = ? WHERE img_id = ?", array($sitioDest1, $imgId1));
            } else {
                DB::insert("INSERT INTO bdp_imagen (sit_id, img_ruta) VALUES (?,?)", array($sitId, $sitioDest1));
            }
        }
        if ($sitioRuta2 !== "" && $sitioDest2 !== "") {
            if (!empty($img[1]->img_ruta)) {
                $img2 = $img[1]->img_ruta;
                unlink($img2);
                DB::update("UPDATE bdp_imagen SET img_ruta = ? WHERE img_id = ?", array($sitioDest2, $imgId2));
            } else {
                DB::insert("INSERT INTO bdp_imagen (sit_id, img_ruta) VALUES (?,?)", array($sitId, $sitioDest2));
            }
        }
        if ($sitioRuta3 !== "" && $sitioDest3 !== "") {
            if (!empty($img[2]->img_ruta)) {
                $img3 = $img[2]->img_ruta;
                unlink($img3);
                DB::update("UPDATE bdp_imagen SET img_ruta = ? WHERE img_id = ?", array($sitioDest3, $imgId3));
            } else {
                DB::insert("INSERT INTO bdp_imagen (sit_id, img_ruta) VALUES (?,?)", array($sitId, $sitioDest3));
            }
        }

        Session::flash("editar", "Sitio editado exitosamente");
        return redirect(url("admin/sitio/listar"));
        //print_r($img);
    }

    function getListar(Request $request) {
        if (Session::has("usuarioAdmin")) {
            $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_estado, bdp_categoria, bdp_subcategoria"
                            . " WHERE bdp_sitio.est_id=bdp_estado.est_id AND "
                            . "bdp_sitio.cat_id=bdp_categoria.cat_id AND "
                            . "bdp_sitio.subcat_id=bdp_subcategoria.subcat_id");
            return view("Modulos.Panel.sitio.listar", compact("sitios"));
        } else {
            return redirect(url("home/index"));
        }
    }

    function getInhabilitar($id) {
        if (Session::has("usuarioAdmin")) {
            DB::update("UPDATE bdp_sitio SET est_id = 0, sit_deleted_at = CURRENT_TIMESTAMP WHERE sit_id = ?", array($id));

            Session::flash("inhabilitar", "Se ha inhabilitado el sitio exitosamente");
            return redirect(url("admin/sitio/listar"));
        } else {
            return redirect(url("home/index"));
        }
    }

    function getHabilitar($id) {
        if (Session::has("usuarioAdmin")) {

            DB::update("UPDATE bdp_sitio SET est_id = 1, sit_deleted_at = NULL WHERE sit_id = ?", array($id));

            Session::flash("habilitar", "Se ha habilitado el sitio exitosamente");
            return redirect(url("admin/sitio/listar"));
        } else {
            return redirect(url("home/index"));
        }
    }

    function getSubcategoria() {
        $cat_id = Input::get("cat_id");
        $subcategorias = DB::select("SELECT subcat_id, subcat_nombre FROM "
                        . "bdp_subcategoria WHERE cat_id = ?", array($cat_id));
        return Response::json($subcategorias);
    }

}
