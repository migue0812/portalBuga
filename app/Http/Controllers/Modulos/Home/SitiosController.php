<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
 * Description of SitiosController
 *
 * @author Ne_K Music
 */
class SitiosController extends Controller {

    function getIndex() {
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                        . "bdp_imagen.sit_id = bdp_sitio.sit_id ORDER BY RAND() LIMIT 2");
        $sitios2 = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                        . "bdp_imagen.sit_id = bdp_sitio.sit_id");
        return view('Modulos.Home.sitios', compact("sitios"), compact("sitios2"));
    }

    function getDet($id) {
        $sitDetalle = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                . "bdp_sitio.sit_id = ? AND bdp_imagen.sit_id = bdp_sitio.sit_id", array($id));
        $sitDetalle = $sitDetalle[0];
        return view('Modulos.Home.sitiosdet', compact("sitDetalle"));
    }

}
