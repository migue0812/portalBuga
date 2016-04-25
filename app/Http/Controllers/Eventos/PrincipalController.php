<?php

namespace App\Http\Controllers\Eventos;

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
class principalController extends Controller {

   
    function getPrincipal() {
        
        return view('Evento.principal');
    }
   }
    
    