<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
 * Description of CookiesController
 *
 * @author JuanGabo
 */
class CookiesController extends Controller {

    function getIndex() {
        return view('Modulos.Home.cookies');
    }

}
