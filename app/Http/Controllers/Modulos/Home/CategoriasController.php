<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/**
 * Description of CategoriasController
 *
 * @author Juan-Gabo
 */
class CategoriasController extends controller {

    function getIndex() {
        $categorias = DB::select("SELECT * FROM bdp_categoria, bdp_imagen WHERE "
                . "bdp_imagen.cat_id = bdp_categoria.cat_id");
        return view('Modulos.Home.categorias', compact("categorias"));
    }

    function getDet($id) {
        $catDetalle = DB::select("SELECT * FROM bdp_categoria, bdp_imagen WHERE "
                . "bdp_categoria.cat_id = ? AND bdp_imagen.cat_id = ? AND "
                . "bdp_imagen.cat_id = bdp_categoria.cat_id", array($id, $id));
        $catDetalle = $catDetalle[0];
        return view('Modulos.Home.categoriasdet', compact("catDetalle"));
    }

}
