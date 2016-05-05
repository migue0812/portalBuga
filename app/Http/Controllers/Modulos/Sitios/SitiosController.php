<?php

namespace App\Http\Controllers\Modulos\Sitios;


use App\Http\Requests;
use App\Http\Controllers\Controller;
/**
 * Description of SitiosContoller
 *
 * @author Diego Alexis Alzate
 */
class SitiosController extends Controller {
    
    function getIndex(){
        return view('Modulos.Sitios.sitio');
    }

    
    function getDetalle(){
        return view('Modulos.Sitios.sitiodetalle');
    }
    
    }
