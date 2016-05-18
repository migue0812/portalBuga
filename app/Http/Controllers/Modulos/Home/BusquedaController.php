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
            $resultados = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                . "sit_nombre LIKE '%$nombre%' AND "
                . "bdp_imagen.sit_id=bdp_sitio.sit_id");
    	
        
        if (empty($resultados)){
            Session::flash("sinResultados", "No se encontraron resultados");
            return view('Modulos.Home.busqueda', compact("resultados"));
        }else{
            return view('Modulos.Home.busqueda', compact("resultados"));
        }
        
    }

}
