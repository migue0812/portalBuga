<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
 * Description of informacionController
 *
 * @author JuanGabo
 */
class InformacionController extends Controller {

    function getIndex() {
        return view('Modulos.Home.informacion');
    }

}
