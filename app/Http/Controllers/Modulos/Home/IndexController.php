<?php

namespace App\Http\Controllers\Modulos\Home;


use App\Http\Requests;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    function getIndex(){
           	return view('Modulos.Home.index');
    }
}
