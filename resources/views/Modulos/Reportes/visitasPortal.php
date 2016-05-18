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
<h2 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Reporte de visitas del Portal</h2>
<h4 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Fecha y Hora: ' . 
 ($fecha).'</h4>
     <br>
     <h3 style="text-align: center" class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>El Portal tiene:</h3>
     <h2 style="color: blue; text-align: center">'.' ' .$visitas->visita.' '.'visita(s)</h2>
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
$dompdf->stream("Reporte_visitas_portal.pdf");