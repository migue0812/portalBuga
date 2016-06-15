<?php
namespace App\Http\Controllers\Modulos\Panel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
/**
 * Description of EventoController
 *
 * @author Luis David Sicua <xwhisper_dim@outlook.com>
 */
class EventoController extends Controller {
  function getIndex(Request $request) {
      if (Session::has("usuarioAdmin")) {
        return view("Modulos.Panel.evento.evento");
    }else {
            return redirect(url("home/index"));
        }
    }
    function getEvento(Request $request) {
        if (Session::has("usuarioAdmin")) {
        return view("Modulos.Panel.evento.evento");
    }else {
            return redirect(url("home/index"));
        }
    }
    function getCrear(Request $request) {
        if (Session::has("usuarioAdmin")) {
        $categorias = DB::select("SELECT * FROM bdp_categoria");
        $subcategoria = DB::select("SELECT * FROM bdp_subcategoria");
        $sitios = DB::select("SELECT * FROM bdp_sitio");
        return view("Modulos.Panel.evento.crear", compact('categorias', 'subcategoria', 'sitios'));
    }else {
            return redirect(url("home/index"));
        }
    }
    
    function getFiltro(Request $request) {
        if (Session::has("usuarioAdmin")) {
            return view("Modulos.Panel.evento.filtro");
        } else {
            return redirect(url("home/index"));
        }
    }
    
    function postFiltro(Request $request) {
        $buscar = $_POST['buscar'];
        $eventos = DB::select("SELECT * FROM bdp_evento,bdp_estado,bdp_categoria,bdp_subcategoria WHERE bdp_evento.est_id=bdp_estado.est_id and "
                        . "bdp_categoria.cat_id=bdp_evento.cat_id and bdp_subcategoria.subcat_id=bdp_evento.subcat_id AND eve_nombre LIKE '%$buscar%'");
        return view("Modulos.Panel.evento.listar", compact('eventos'));
        }
        
    function getEditar($id_eve) {
        if (Session::has("usuarioAdmin")) {
        $eventos = DB::select("SELECT * FROM bdp_evento, bdp_imagen, bdp_categoria, bdp_subcategoria WHERE bdp_evento.eve_id = ? "
                        . "AND bdp_imagen.eve_id = bdp_evento.eve_id AND bdp_evento.cat_id=bdp_categoria.cat_id "
                        . "AND bdp_evento.subcat_id=bdp_subcategoria.subcat_id", array($id_eve));
        $eventos = $eventos[0];
        $categorias = DB::select("SELECT * FROM bdp_categoria");
        $subcategoria = DB::select("SELECT * FROM bdp_subcategoria");
        return view("Modulos.Panel.evento.editar", compact('categorias', 'subcategoria','eventos'));
    }else {
            return redirect(url("home/index"));
        }
    }
    function postEditar() {
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
        $eveId = $_POST['id'];
        $eve_foto = $_FILES["eve_foto"]["name"];
        $ruta = $_FILES["eve_foto"]["tmp_name"];
        $destino = "img/" . $eve_foto;
        if ($ruta !== "" && $destino !== "") {
            copy($ruta, $destino);
        }
       $reglas = array(
            "eve_nombre" => "required | max:40 ",
            "valor_boleta" => "required | integer",
            "eve_direccion" => "required | min:8",
            "eve_nombre_contacto" => "required| min:3",
            "eve_correo_contacto" => "required |email",
            "eve_telefono_contacto" => "required | min:7",
            "eve_hora" => "required",
            "eve_fecha_inicio" => "required",
            "eve_fecha_fin" => "required",
            "eve_descripcion" => "required  | min:30",
            
        );
        $mensajes = [
            "eve_nombre.required" => "El campo 'Nombre evento' debe ser obligarorio",
            "eve_nombre.max" => "El campo 'Nombre evento' debe tener máximo 40 caracteres",
            "eve_nombre.unique" => "El evento " . "'" . $eve_nombre . "'" . " ya existe en la base de datos",
            "valor_boleta.required" => "El campo 'Valor boleta' debe ser obligarorio",
            "valor_boleta.integer" => "El campo 'Valor boleta' debe ser un valor numérico",
            "eve_direccion.required" => "El campo 'Direccion' debe ser obligarorio",
            "eve_direccion.min" => "El campo 'Direccion' debe tener minimo 8 caracteres",
            "eve_nombre_contacto.required" => "El campo 'Nombre contacto' debe ser obligarorio",
            "eve_nombre_contacto.min" => "El campo 'Nombre contacto' debe tener minimo 3 caracteres",
            "eve_correo_contacto.required" => "El campo 'Correo contacto' debe ser obligarorio",
            'eve_correo_contacto.email' => "Formato de Email no válido",
            "eve_telefono_contacto.required" => "El campo 'Telefeno contacto' debe ser obligarorio",
            "eve_telefono_contacto.min" => "El campo 'Telefono contacto' debe tener minimo 7 caracteres",
            "eve_hora.required" => "El campo 'Hora' debe ser obligarorio",
            "eve_fecha_inicio.required" => "El campo 'Fecha inicio' debe ser obligarorio",
            "eve_fecha_fin.required" => "El campo 'Fecha fin' debe ser obligarorio",
            "eve_descripcion.required" => "El campo 'Descripcion' debe ser obligarorio",
            "eve_descripcion.min" => "El campo 'Descripcion' debe tener minimo 30 caracteres",
            "eve_foto.image" => "El campo 'imagen' debe contener una imagen",
        ];
        $validacion = Validator::make($_POST, $reglas, $mensajes);
        if ($validacion->fails()) {
            return redirect(url('admin/evento/editar/'.$eveId))
                            ->withErrors($validacion->errors());
        }
        DB::update("UPDATE bdp_evento SET eve_nombre = ?, cat_id = ?, subcat_id = ?, eve_valor_boleta = ?, "
                . "eve_direccion = ?, eve_nombre_contacto = ?, eve_correo_contacto = ?, eve_telefono_contacto = ?,"
                . "eve_fecha_hora = ?,eve_fecha_inicio = ?,eve_fecha_fin = ?, eve_descripcion = ?,eve_updated_at = CURRENT_TIMESTAMP WHERE eve_id = ?", array($eve_nombre, $eve_cat, $eve_subcat, $valor_boleta,
            $eve_direccion, $eve_nombre_contacto, $eve_correo_contacto, $eve_telefono_contacto, $eve_hora, $eve_fecha_inicio, $eve_fecha_fin, $eve_descripcion,$eveId));
        if ($ruta !== "" && $destino !== "") {
            $img = DB::select("SELECT * FROM bdp_imagen WHERE eve_id = ?", array($eveId));
            $img = $img[0]->img_ruta;
            unlink($img);
            DB::insert("UPDATE bdp_imagen SET img_ruta = ? WHERE eve_id = ?", array($destino, $eveId));
        }
        Session::flash("editar", "Sitio editado exitosamente");
        return redirect(url("admin/evento/listar"));
    }
    function getReporte(Request $request) {
        if (Session::has("usuarioAdmin")) {
        return view("Modulos.Panel.evento.reporte");
    }else {
            return redirect(url("home/index"));
        }
    }
    function getListar(Request $request) {
        if (Session::has("usuarioAdmin")) {
        $eventos = DB::select("SELECT * FROM bdp_evento,bdp_estado,bdp_categoria,bdp_subcategoria WHERE bdp_evento.est_id=bdp_estado.est_id and "
                        . "bdp_categoria.cat_id=bdp_evento.cat_id and bdp_subcategoria.subcat_id=bdp_evento.subcat_id");
        return view("Modulos.Panel.evento.listar", compact('eventos'));
    }else {
            return redirect(url("home/index"));
        }
    }
    function getInhabilitar($id) {
        if (Session::has("usuarioAdmin")) {
        DB::update("UPDATE bdp_evento SET est_id = 0, eve_deleted_at = CURRENT_TIMESTAMP WHERE eve_id = ?", array($id));
        Session::flash("inhabilitar", "Se ha inhabilitado el sitio exitosamente");
        return redirect(url("admin/evento/listar"));
    }else {
            return redirect(url("home/index"));
        }
    }
    function getHabilitar($id) {
        if (Session::has("usuarioAdmin")) {
        DB::update("UPDATE bdp_evento SET est_id = 1, eve_deleted_at = NULL WHERE eve_id = ?", array($id));
        Session::flash("habilitar", "Se ha habilitado el sitio exitosamente");
        return redirect(url("admin/evento/listar"));
    }else {
            return redirect(url("home/index"));
        }
    }
    //Funciones Post 
    function postCrear(Request $request) {
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
        $destino = "img/" . $eve_foto;
        copy($ruta, $destino);
        //Validaciones
        $reglas = array(
            "eve_nombre" => "required | max:40 | unique:bdp_evento,eve_nombre",
            "valor_boleta" => "required | integer",
            "eve_direccion" => "required | min:8",
            "eve_nombre_contacto" => "required| min:3",
            "eve_correo_contacto" => "required |email",
            "eve_telefono_contacto" => "required | min:7",
            "eve_hora" => "required",
            "eve_fecha_inicio" => "required",
            "eve_fecha_fin" => "required",
            "eve_descripcion" => "required  | min:30",
            "eve_foto" => "image"
        );
        $mensajes = [
            "eve_nombre.required" => "El campo 'Nombre evento' debe ser obligarorio",
            "eve_nombre.max" => "El campo 'Nombre evento' debe tener máximo 40 caracteres",
            "eve_nombre.unique" => "El evento " . "'" . $eve_nombre . "'" . " ya existe en la base de datos",
            "valor_boleta.required" => "El campo 'Valor boleta' debe ser obligarorio",
            "valor_boleta.integer" => "El campo 'Valor boleta' debe ser un valor numérico",
            "eve_direccion.required" => "El campo 'Direccion' debe ser obligarorio",
            "eve_direccion.min" => "El campo 'Direccion' debe tener minimo 8 caracteres",
            "eve_nombre_contacto.required" => "El campo 'Nombre contacto' debe ser obligarorio",
            "eve_nombre_contacto.min" => "El campo 'Nombre contacto' debe tener minimo 3 caracteres",
            "eve_correo_contacto.required" => "El campo 'Correo contacto' debe ser obligarorio",
            'eve_correo_contacto.email' => "Formato de Email no válido",
            "eve_telefono_contacto.required" => "El campo 'Telefeno contacto' debe ser obligarorio",
            "eve_telefono_contacto.min" => "El campo 'Telefono contacto' debe tener minimo 7 caracteres",
            "eve_hora.required" => "El campo 'Hora' debe ser obligarorio",
            "eve_fecha_inicio.required" => "El campo 'Fecha inicio' debe ser obligarorio",
            "eve_fecha_fin.required" => "El campo 'Fecha fin' debe ser obligarorio",
            "eve_descripcion.required" => "El campo 'Descripcion' debe ser obligarorio",
            "eve_descripcion.min" => "El campo 'Descripcion' debe tener minimo 30 caracteres",
            "eve_foto.image" => "El campo 'imagen' debe contener una imagen",
        ];
        $validacion = Validator::make($_POST, $reglas, $mensajes);
        if ($validacion->fails()) {
            return redirect(url('admin/evento/crear'))
                            ->withErrors($validacion->errors());
        }
        //senticia Sql insertar datos
        DB::insert("INSERT INTO bdp_evento (cat_id,subcat_id,eve_nombre,eve_fecha_hora,eve_direccion,eve_nombre_contacto,eve_correo_contacto,eve_telefono_contacto,eve_valor_boleta,eve_descripcion,eve_fecha_inicio,eve_fecha_fin,est_id) "
                . "VALUES(?,?,?,?,?,?,?,?,?,?,?,?,1)", array($eve_cat, $eve_subcat, $eve_nombre, $eve_hora, $eve_direccion, $eve_nombre_contacto, $eve_correo_contacto, $eve_telefono_contacto, $valor_boleta, $eve_descripcion, $eve_fecha_inicio, $eve_fecha_fin));
        //sentencia sql imagen
        $eve_id = DB::select('SELECT IFNULL(MAX(eve_id),0) AS eve_id FROM bdp_evento ORDER BY eve_id DESC LIMIT 1');
        $eve_id = $eve_id[0]->eve_id;
        //Insertar imagen
        DB::insert("INSERT INTO bdp_imagen (eve_id,img_ruta) VALUES (?,?)", array($eve_id, $destino));
        Session::flash("registrar", "Evento registrado exitosamente");
        return redirect(url('admin/evento/listar'));
    }
}
