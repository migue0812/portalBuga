<?php

namespace App\Http\Controllers\Modulos\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Http\Request;

/**
 * Description of ContactoController
 *
 * @author Balem
 */
class ContactoController extends Controller {

    function getIndex() {
        return view('Modulos.Home.contacto');
    }

    function postCrear(Request $request) {
        Mail::send('Modulos.Home.contact',$request->all(), function($msj){
            $msj->subject('Correo Nuevo');
            $msj->to('portalbuga@gmail.com');        
    });
//        $nombre = $_POST["nombre"];
//        $email = $_POST["email"];
//        $motivo = $_POST["motivo"];
//        $descripcion = $_POST["descripcion"];
//        $para = "portalbuga@gmail.com";
//        $asunto ="Mensaje Nuevo";
//        $cabeceras = "From:".$email;
//                    $cabeceras = $cabeceras."Mime-Version: 1.0\n";
//                    $cabeceras = $cabeceras."Content-Type: text/html";
//
//        
//        $mensaje = "Nombre del remitente: ".$nombre."
//                    Email: ".$email."
//                    Motivo: ".$motivo."    
//                    Mensaje: ".$descripcion."    ";
//        
//        mail($para, $asunto,  utf8_decode($mensaje), $cabeceras);
//        
//        
//        echo "Hemos recibido su Mensaje";
        return redirect(url("home/contacto"));
    }
    
}


