<?php

namespace App\Http\Controllers\Modulos\Itinerario;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;

class ItinerarioController extends Controller {

    function getIndex() {
        if (Session::has("usuarioLogueado")){
        $idUsuario = Session::get("usuarioId");
        
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_itinerario WHERE "
                . "bdp_sitio.sit_id=bdp_itinerario.sit_id "
                . "AND bdp_itinerario.usu_id=$idUsuario");
    	return view('Modulos.Itinerario.sitios', compact("sitios"));
    } 
    else {
           return redirect(url("home/index"));
        }
    }

    function getEvento() {
         if (Session::has("usuarioLogueado")){
        $idUsuario = Session::get("usuarioId");
        
        $eventos = DB::select("SELECT * FROM bdp_evento, bdp_itinerario WHERE "
                . "bdp_evento.eve_id=bdp_itinerario.eve_id "
                . "AND bdp_itinerario.usu_id=$idUsuario");
    	return view('Modulos.Itinerario.eventos', compact("eventos"));
    } 
    else {
           return redirect(url("home/index"));
        }
    }

    function getTodos() {
         if (Session::has("usuarioLogueado")){
        $idUsuario = Session::get("usuarioId");
        
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_itinerario WHERE "
                . "bdp_sitio.sit_id=bdp_itinerario.sit_id "
                . "AND bdp_itinerario.usu_id=$idUsuario");
    	return view('Modulos.Itinerario.verTodo', compact("sitios"));
    } 
    else {
           return redirect(url("home/index"));
        }
    }
    
    function getSitio($id) {
        
        $idUsuario = Session::get("usuarioId");
        $verificar = DB::select("SELECT * FROM bdp_itinerario WHERE sit_id=? AND usu_id=?", 
                array($id, $idUsuario));
        if($verificar){
           Session::flash("sitioExistente", "Ya existe este sitio en el itinerario"); 
           return redirect(url("itinerario")); 
        }  else {
         DB::insert("INSERT INTO bdp_itinerario (usu_id, sit_id, iti_visitado) VALUES (?,?,?)",
                array($idUsuario, $id, 'No'));
        
        Session::flash("sitio", "Se ha agregado exitosamente el sitio al itinerario");
        return redirect(url("itinerario"));   
        }
    }
    
    function getSitiovisitado($id) {
        if (Session::has("usuarioLogueado")) {
            $idUsuario = Session::get("usuarioId");
            DB::update("UPDATE bdp_itinerario SET iti_visitado = 'Si', "
                    . "iti_updated_at = CURRENT_TIMESTAMP WHERE sit_id = ? AND usu_id = ?", 
                    array($id, $idUsuario));

            Session::flash("sitioVisitado", "El sitio ha sido visitado");
            return redirect(url("itinerario"));
        } else {
            return redirect(url("home/index"));
        }
}
function getSitionovisitado($id) {
        if (Session::has("usuarioLogueado")) {
            $idUsuario = Session::get("usuarioId");
            DB::update("UPDATE bdp_itinerario SET iti_visitado = 'No', "
                    . "iti_updated_at = CURRENT_TIMESTAMP WHERE sit_id = ? AND usu_id = ?", 
                    array($id, $idUsuario));

            Session::flash("sitioNoVisitado", "El sitio no ha sido visitado");
            return redirect(url("itinerario"));
        } else {
            return redirect(url("home/index"));
        }
}
function getSitioeliminar($id) {
        if (Session::has("usuarioLogueado")) {
            $idUsuario = Session::get("usuarioId");
            DB::delete("DELETE FROM bdp_itinerario WHERE sit_id = ? AND usu_id = ?", 
                    array($id, $idUsuario));

            Session::flash("sitioEliminado", "Se ha eliminado el sitio del itinerario");
            return redirect(url("itinerario"));
        } else {
            return redirect(url("home/index"));
        }
}

function getEventos($id) {
        
        $idUsuario = Session::get("usuarioId");
        $verificar = DB::select("SELECT * FROM bdp_itinerario WHERE eve_id=? AND usu_id=?", 
                array($id, $idUsuario));
        if($verificar){
           Session::flash("eventoExistente", "Ya existe este evento en el itinerario"); 
           return redirect(url("itinerario/evento")); 
        }  else {
         DB::insert("INSERT INTO bdp_itinerario (usu_id, eve_id, iti_visitado) VALUES (?,?,?)",
                array($idUsuario, $id, 'No'));
        
        Session::flash("evento", "Se ha agregado exitosamente el evento al itinerario");
        return redirect(url("itinerario/evento"));   
        }
    }
    
    function getEventovisitado($id) {
        if (Session::has("usuarioLogueado")) {
            $idUsuario = Session::get("usuarioId");
            DB::update("UPDATE bdp_itinerario SET iti_visitado = 'Si', "
                    . "iti_updated_at = CURRENT_TIMESTAMP WHERE eve_id = ? AND usu_id = ?", 
                    array($id, $idUsuario));

            Session::flash("eventoVisitado", "Has asistido al evento");
            return redirect(url("itinerario/evento"));
        } else {
            return redirect(url("home/index"));
        }
}
function getEventonovisitado($id) {
        if (Session::has("usuarioLogueado")) {
            $idUsuario = Session::get("usuarioId");
            DB::update("UPDATE bdp_itinerario SET iti_visitado = 'No', "
                    . "iti_updated_at = CURRENT_TIMESTAMP WHERE eve_id = ? AND usu_id = ?", 
                    array($id, $idUsuario));

            Session::flash("eventoNoVisitado", "No has asistido al evento");
            return redirect(url("itinerario/evento"));
        } else {
            return redirect(url("home/index"));
        }
}
function getEventoeliminar($id) {
        if (Session::has("usuarioLogueado")) {
            $idUsuario = Session::get("usuarioId");
            DB::delete("DELETE FROM bdp_itinerario WHERE eve_id = ? AND usu_id = ?", 
                    array($id, $idUsuario));

            Session::flash("eventoEliminado", "Se ha eliminado el evento del itinerario");
            return redirect(url("itinerario/evento"));
        } else {
            return redirect(url("home/index"));
        }
}

}
