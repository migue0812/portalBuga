<?php

namespace App\Http\Controllers\Modulos\Home;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class IndexController extends Controller
{
    function getIndex(){
        $ip = $_SERVER["REMOTE_ADDR"];
        $verificarVisita = DB::select("SELECT sit_id, vis_ip FROM bdp_visitas "
                . "WHERE sit_id IS NULL AND vis_ip = ?" , array($ip));
        if(empty($verificarVisita)){
           $visitas = DB::insert("INSERT INTO bdp_visitas (vis_ip) VALUES "
                . "(?)", array($ip));
        }
        $sitios = DB::select("SELECT sit_nombre, bdp_imagen.sit_id, img_ruta, COUNT(bdp_visitas.sit_id) "
                . "AS visita FROM bdp_imagen, bdp_sitio, bdp_visitas "
                . "WHERE bdp_sitio.sit_id=bdp_visitas.sit_id AND bdp_sitio.sit_id=bdp_imagen.sit_id AND est_id = 1 "
                . "GROUP BY bdp_visitas.sit_id ORDER BY visita DESC LIMIT 6");
           	return view('Modulos.Home.index', compact("sitios"));
    }
}
