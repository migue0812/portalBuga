<?php

namespace App\Http\Controllers\Evento;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

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
class detalleController extends Controller {

   
    function getDetalle() {
        
        return view('Eventodetalle.Detalle');
    }
   }
    
    