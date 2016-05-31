<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
 * Description of RenunciaController
 *
 * @author JuanGabo
 */
class RenunciaController extends Controller {

    function getIndex() {
        return view('Modulos.Home.renuncia');
    }

}
