<?php

namespace App\Http\Controllers\Modulos\Panel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Session;
/**
 * Description of PanelController
 *
 * @author David
 */
class PanelController extends Controller {

  function getIndex(Request $request) {
      if (Session::has("usuarioAdmin")) {
    return view("Modulos.Panel.panel");
  }else {
            return redirect(url("home/index"));
        }
    }


  function getPanel(Request $request) {
      if (Session::has("usuarioAdmin")) {
    return view("Modulos.Panel.panel");
  }else {
            return redirect(url("home/index"));
        }
    }

}