<?php

namespace App\Http\Controllers\Modulos\Home;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
/**
 * Description of BusquedaController
 *
 * @author Balem
 */
class BusquedaController extends Controller {

    function getIndex() {
        return view('Modulos.Home.busqueda');
    }
    
    function postBuscar(){
        $nombre=$_POST['nombre'];
            $resultados = DB::select("SELECT * FROM `bdp_sitio`,`bdp_imagen` WHERE bdp_sitio.`sit_id`=bdp_imagen.`sit_id` and (`sit_nombre` LIKE '%$nombre%' or `sit_descripcion` LIKE '%$nombre%')");
            $eventos= DB::select("SELECT * FROM `bdp_evento`,`bdp_imagen` WHERE bdp_evento.`eve_id`=bdp_imagen.`eve_id` and (`eve_nombre` LIKE '%$nombre%' or `eve_descripcion` LIKE '%$nombre%')");
    	
        
         
//        if (isset($resultados,$eventos)){
//            Session::flash("Resultados", "No se encontraron resultados");
//            return view('Modulos.Home.busqueda', compact("resultados"));
//        }else{
//            return view('Modulos.Home.busqueda', compact("resultados"));
//        }
            return view('Modulos.Home.busqueda', compact("resultados"),compact("eventos"));
        
        
    }

}
