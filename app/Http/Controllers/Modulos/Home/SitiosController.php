<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Description of SitiosController
 *
 * @author Ne_K Music
 */
class SitiosController extends Controller {

    function getIndex() {

        return view('Modulos.Home.sitios');
    }

    function getDet() {

        return view('Modulos.Home.sitiosdet');
    }

}
