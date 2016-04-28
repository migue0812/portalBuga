<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
/**
 * Description of PanelController
 *
 * @author David
 */
class PanelController extends Controller {

  function getIndex(Request $request) {
    return view("Modulos.Panel.panel");
  }


  function getPanel(Request $request) {
    return view("Modulos.Panel.panel");
  }

}