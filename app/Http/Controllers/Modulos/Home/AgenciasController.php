<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
 * Description of AgenciasController
 *
 * @author JuanGabo
 */
class AgenciasController extends Controller {

    function getIndex() {
        return view('Modulos.Home.agencias');
    }

}
