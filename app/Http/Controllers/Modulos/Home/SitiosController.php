<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
 * Description of SitiosController
 *
 * @author Ne_K Music
 */
class SitiosController extends Controller {

    function getIndex() {
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                        . "bdp_imagen.sit_id = bdp_sitio.sit_id AND est_id = 1 "
                . "GROUP BY bdp_sitio.sit_id ORDER BY RAND() LIMIT 2");
        $sitios2 = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                        . "bdp_imagen.sit_id = bdp_sitio.sit_id AND est_id = 1 GROUP BY bdp_sitio.sit_id");
        return view('Modulos.Home.sitios', compact("sitios"), compact("sitios2"));
    }

    function getDet($id) {
         $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                        . "bdp_imagen.sit_id = bdp_sitio.sit_id AND est_id = 1 "
                . "GROUP BY bdp_sitio.sit_id ORDER BY RAND() LIMIT 2");
        $ip = $_SERVER["REMOTE_ADDR"];
        $imagenes = DB::select("SELECT * FROM bdp_imagen WHERE sit_id = ?", array($id));
        $sitDetalle = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                . "bdp_sitio.sit_id = ? AND bdp_imagen.sit_id = bdp_sitio.sit_id", array($id));
        $sitDetalle = $sitDetalle[0];
        $verificarVisita = DB::select("SELECT sit_id, vis_ip FROM bdp_visitas "
                . "WHERE sit_id = ? AND vis_ip = ?" , array($id, $ip));
        if(empty($verificarVisita)){
           $visitas = DB::insert("INSERT INTO bdp_visitas (sit_id, vis_ip) VALUES "
                . "(?,?)", array($id, $ip));
        }
        return view('Modulos.Home.sitiosDet', compact("sitDetalle","imagenes","sitios")); 
    }
    
    function getLike($id){
        
    }

}
