<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Description of CategoriasController
 *
 * @author juan gabo
 */
class CategoriasController extends controller {

    function getIndex() {

        return view('Modulos.Home.categorias');
    }

    function getDet() {

        return view('Modulos.Home.categoriasdet');
    }

}
