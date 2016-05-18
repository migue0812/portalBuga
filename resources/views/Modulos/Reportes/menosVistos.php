<?php include ("/../../../../public/dompdf/dompdf_config.inc.php") ;
date_default_timezone_set("America/Bogota");
        $fecha = date("d-m-Y")." ".date("h:i:sa");

 $codigoHTML=' 
  <html>
    <head>
        <meta charset="UTF-8">
        <title>Tu Buga</title>
        <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">

    </head>
    <body>
<div id="box-panel" class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
<h1 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>PORTAL BUGA</h1>
<h2 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Reporte de sitios menos vistos</h2>
<h4 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Fecha y Hora: ' . 
 ($fecha).'</h4>
        </div>
        <div class="panel-body">
            <br>
            <div class="">
                <div class="table-responsive">
                    <table border=1 class="table table-bordered" style="margin: 0 auto; width:100%;">
                        <thead style="font-size:14pt; background-color:lightblue">
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Visitas</th>
                             </tr>
                        </thead>
                        <tbody style="font-size:12pt; text-align:center;">';
                            
                            $count = 1;
                            foreach ($sitios as $sitio):
                                $codigoHTML.='
                                <tr>
                                    <td>'.$count++.'</td>
                                    <td>'.$sitio->sit_nombre.'</td>
                                    <td>'.$sitio->visita.'</td>
                                    
                                </tr>';
                                
                            endforeach;
                            $codigoHTML.='
                        </tbody>
                       
                    </table>

                </div></div>
        </div> 
    </div>
</div>
</body>
</html>';


//$codigoHTML = utf8_encode($codigoHTML);
$dompdf = new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_sitios_menos_vistos.pdf");