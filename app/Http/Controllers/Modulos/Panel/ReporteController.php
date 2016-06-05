<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Session;
class ReporteController extends Controller {

function getMasvistos(){
        if (Session::has("usuarioAdmin")) {
    
        $sitios = DB::select("SELECT sit_nombre, COUNT(bdp_visitas.sit_id) AS visita FROM "
                . "bdp_sitio, bdp_visitas WHERE bdp_sitio.sit_id=bdp_visitas.sit_id "
                . "GROUP BY bdp_visitas.sit_id ORDER BY bdp_visitas.sit_id DESC LIMIT 10");
    	return view('Modulos.Reportes.masVistos', compact("sitios"));
    }
    else {
            return redirect(url("home/index"));
    }}
    
    function getMenosvistos(){
        if (Session::has("usuarioAdmin")) {
    
        $sitios = DB::select("SELECT sit_nombre, COUNT(bdp_visitas.sit_id) AS visita FROM "
                . "bdp_sitio, bdp_visitas WHERE bdp_sitio.sit_id=bdp_visitas.sit_id "
                . "GROUP BY bdp_visitas.sit_id ORDER BY bdp_visitas.sit_id ASC LIMIT 10");
    	return view('Modulos.Reportes.menosVistos', compact("sitios"));
    }
    else {
            return redirect(url("home/index"));
    }}

    function getUsuario(){
        if (Session::has("usuarioAdmin")) {
        $usuarios = DB::select("SELECT * FROM bdp_usuario, bdp_estado, bdp_rol, bdp_dato_usuario "
                . "WHERE bdp_usuario.usu_id=bdp_dato_usuario.usu_id AND bdp_usuario.est_id="
                . "bdp_estado.est_id AND bdp_usuario.rol_id=bdp_rol.rol_id");
    	return view('Modulos.Reportes.usuario', compact("usuarios"));
    }
    else {
            return redirect(url("home/index"));
    }}
    
    function getVisitasportal(){
        if (Session::has("usuarioAdmin")) {
    
        $visitas = DB::select("SELECT COUNT(vis_id) AS visita FROM bdp_visitas "
                . "WHERE sit_id IS NULL");
        $visitas = $visitas[0];
    	return view('Modulos.Reportes.visitasPortal', compact("visitas"));
    }
    else {
            return redirect(url("home/index"));
    }}
}