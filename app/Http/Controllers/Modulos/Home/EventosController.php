<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of crearController
 *
 * @author Luis Angel
 */
class EventosController extends Controller {

    function getIndex() {

        return view('Modulos.Home.eventos');
    }

    function getDet() {

        return view('Modulos.Home.eventosdet');
    }

}
