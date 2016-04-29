<?php

namespace App\Http\Controllers\Modulos\Itinerario;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItinerarioController extends Controller {

    function getIndex() {
        return view('Modulos.Itinerario.sitios');
    }

    function getEvento() {
        return view('Modulos.Itinerario.eventos');
    }

}
