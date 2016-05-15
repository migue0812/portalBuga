<?php

namespace App\Http\Controllers\Modulos\Home;
use App\Http\Requests;
use App\Http\Controllers\Controller;
/**
 * Description of BusquedaController
 *
 * @author Balem
 */
class BusquedaController extends Controller {

    function getIndex() {
        return view('Modulos.Home.busqueda');
    }

}
