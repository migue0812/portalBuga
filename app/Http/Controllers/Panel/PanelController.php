<?php

namespace App\Http\Controllers\Panel;

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
    return view("Panel.panel");
  }


  function getPanel(Request $request) {
    return view("Panel.panel");
  }

}