<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Description of ContactoController
 *
 * @author Balem
 */
class HistoriaController extends Controller {

    function getIndex() {
        return view('Modulos.Home.historia');
    }

}
