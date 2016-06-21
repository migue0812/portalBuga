<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of crearController
 *
 * @author Luis Angel
 */
class EventosController extends Controller {

    function getIndex() {
        $numRegistros = DB::select("SELECT COUNT(*) AS total FROM bdp_evento WHERE est_id = 1");
        $numRegistros = $numRegistros[0];
        
        $registros = 6;
        $pagina = $_GET["page"];
        if(is_numeric($pagina)){
            $inicio = (($pagina-1)*$registros);
        } else {
            $inicio = 0;
        }
        $paginas = ceil($numRegistros->total/$registros);
         $eventos = DB::select("SELECT * FROM bdp_evento, bdp_imagen WHERE bdp_evento.est_id ='1' and "
                        . "bdp_imagen.eve_id = bdp_evento.eve_id ORDER BY RAND() LIMIT 2 ");
         $eventos2=DB::select("SELECT * FROM bdp_evento, bdp_imagen WHERE  bdp_evento.est_id ='1' and  "
                        . "bdp_imagen.eve_id = bdp_evento.eve_id LIMIT $inicio,$registros");

        return view('Modulos.Home.eventos', compact("eventos","eventos2","paginas","pagina"));
    }

    function getDet($id) {
        $eveDetalle = DB::select("SELECT * FROM bdp_evento, bdp_imagen WHERE "
                . "bdp_evento.eve_id = ? AND bdp_imagen.eve_id = bdp_evento.eve_id", array($id));
        $eveDetalle = $eveDetalle[0];
        return view('Modulos.Home.eventosDet' , compact('eveDetalle'));
    }

}
