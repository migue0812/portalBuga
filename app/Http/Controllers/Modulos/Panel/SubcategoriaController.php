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

        $subcategorias = array();

        return view("Modulos.Panel.subcategoria.crear", compact("categorias", "subcategorias"));

//    return view("Modulos.Panel.subcategoria.crear");
    }else {
            return redirect(url("home/index"));
        }
    }

    function postCrear() {

        $nombre = filter_input(INPUT_POST, 'nombre');
        $descripcion = filter_input(INPUT_POST, 'descripcion');
        $activado = filter_input(INPUT_POST, 'est_id');
        $cat_id = filter_input(INPUT_POST, 'cat_id');
//        $usuario = filter_input(INPUT_POST, 'usuario');

//        $cat_id = DB::select('SELECT IFNULL(MAX(cat_id),0)+1 AS id FROM bdp_categoria ORDER BY id DESC LIMIT 1');
//        $cat_id = $cat_id[0]->id;

        $subcat_id = DB::select('SELECT IFNULL(MAX(subcat_id),0)+1 AS id FROM bdp_subcategoria ORDER BY id DESC LIMIT 1');
        $subcat_id = $subcat_id[0]->id;


DB::insert("INSERT INTO bdp_subcategoria "
                . "( subcat_id, cat_id, subcat_nombre,  subcat_descripcion, est_id"
                . " ) VALUES (?,?,?,?,?)", array($subcat_id, $cat_id,
            $nombre, $descripcion, $activado,));

        $target_dir = dirname(getcwd());
//print_r($target_dir);
//echo "<br />";
        $target_file = $target_dir . "\public\img\subcategorias\\" . basename($_FILES["fileToUpload"]["name"]);
//        print_r($target_file);
        $filename = ($_FILES["fileToUpload"]["name"]);

//        echo "<br />";
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

//        print_r($imageFileType);
// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }






        
        
        if (empty($filename)!==true) {
//    $filename =($_FILES["fileToUpload"]["name"]);
        DB::insert("INSERT INTO bdp_imagen "
                . "( subcat_id , img_ruta ) VALUES (?,?)", array($subcat_id,
            $filename));
 }else{
     DB::insert("INSERT INTO bdp_imagen "
                . "( subcat_id , img_ruta ) VALUES (?,'comodin.jpg')", array($subcat_id));
 }



        Session::put('success', 'categoria creada exitosamente');

//    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));

        return redirect(url("admin/subcategoria/listar"));
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
