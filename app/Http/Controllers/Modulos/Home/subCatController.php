<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Description of SubCatController
 *
 * @author Juan-Gabo
 */
class subCatController extends controller {

    function getIndex() {

        return view('Modulos.Home.subCat');
    }

   
}
