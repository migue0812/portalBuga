<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Description of DesarrolloController
 *
 * @author Ne_K Music
 */
class DesarrolloController extends Controller {

    function getIndex() {
        return view('Modulos.Home.desarrollo');
    }

}
