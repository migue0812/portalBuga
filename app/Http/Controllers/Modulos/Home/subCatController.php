<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
 * Description of SubCatController
 *
 * @author Juan-Gabo
 */
class subCatController extends controller {

    function getIndex($id) {
        $subcatDetalle = DB::select("SELECT * FROM bdp_subcategoria, bdp_imagen WHERE "
                        . "bdp_subcategoria.subcat_id = ? AND bdp_imagen.subcat_id = ? AND "
                        . "bdp_imagen.subcat_id = bdp_subcategoria.subcat_id", array($id, $id));
        $subcatDetalle = $subcatDetalle[0];
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen, bdp_subcategoria WHERE bdp_sitio.subcat_id = ? "
                . "AND bdp_subcategoria.subcat_id = ? AND bdp_sitio.subcat_id = bdp_subcategoria.subcat_id AND "
                . "bdp_imagen.sit_id = bdp_sitio.sit_id GROUP BY bdp_sitio.sit_id", array($id, $id));
        return view('Modulos.Home.subCat', compact("subcatDetalle"), compact("sitios"));
    }

}
