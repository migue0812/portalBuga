@include('Templates.Frontend.head')
@include('Templates.Frontend.header')
<!-- Comienzo Slides -->
<!-- Carousel Header -->

<!-- Final Slides -->
<div class="container">
    <div class="row">
        <div class="box">
            <div class="visitNav">
                <div>
                    <h2 style="text-align: center;">Detalles del Eventos</h2>
                </div>
            </div>
            <hr>

            <!-- Projects Row -->
            <div class="row">
                <div class="col-xs-12 col-md-6 portfolio-item">
                    <a href="se devuleve al index">
                        <img class="img-responsive" src="<?php echo asset("$eveDetalle->img_ruta") ?>" alt="">
                    </a>
                </div>
                <div class="col-xs-12 col-md-6 ">
                    <div class="col-xs-4">
                        <h3 title="Lugar"  class="fa fa-home fa-2x" aria-hidden="true"><b></b></h3>
                        <p><?php echo("$eveDetalle->eve_direccion") ?></p>
                    </div>
                    <div class="col-xs-4">
                        <h3 title="Direccion" class="fa fa-map-marker fa-2x" style="color:#C91414" aria-hidden="true"><b></b></h3>
                        <p><?php echo("$eveDetalle->eve_direccion") ?></p>
                    </div>
                    <div class="col-xs-4">
                        <h3 title="Duracion" class=" fa fa-calendar fa-2x" style="color:blue" aria-hidden="true"><b></b></h3><p>Del <?php echo("$eveDetalle->eve_fecha_inicio") ?> hasta el <?php echo("$eveDetalle->eve_fecha_fin") ?></p>
                    </div>
                    <div class="col-xs-4">
                        <h3 title="Valor Por Persona" class="fa fa-money fa-2x" style="color:green" aria-hidden="true"><b></b></h3>
                        <p><?php echo("$eveDetalle->eve_valor_boleta") ?></p>
                    </div>
                    <div class="col-xs-4">
                        <h3 title="Celular" class="fa fa-mobile fa-2x" aria-hidden="true"><b></b></h3>
                        <p><?php echo("$eveDetalle->eve_telefono_contacto") ?></p>
                    </div>
                    <div class="col-xs-4">
                        <h3 title="Hora" class="fa fa-clock-o fa-2x" style="color:#170C46;" aria-hidden="true"><b></b></h3>
                        <p><?php echo("$eveDetalle->eve_fecha_hora") ?></p>
                    </div>
                    <div class="col-xs-4">
                        <h3 title="Correo" class="fa fa-envelope-o fa-2x" style="color:#D52727;" aria-hidden="true"><b></b></h3>
                        <p><?php echo("$eveDetalle->eve_correo_contacto") ?></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 portfolio-item">
                    <h2 class="text-center" style="margin-top: 60px;"><?php echo("$eveDetalle->eve_nombre") ?></h2>
                    <p class="text-justify" style="margin-top:20px; "class="text-justify"><?php echo("$eveDetalle->eve_descripcion") ?></p>
                </div>

            </div>
                <div class="text-center container container-fluid col-md-12">
                     <div>
                        <h2 class="text-center">UBICACION</h2>
                        <hr class="tagline-divider-cont">
                    </div>

               <form class="mapa form-horizontal col-md-6" id="calculate-route" name="calculate-route" action="#" method="get">
                    
                    <div class="form-group">
                        <label for="from" class="col-sm-2 control-label">Desde:</label>
                        <div class="col-sm-10">
                            <input class="form-control"type="text" id="from" name="from" required="required" placeholder="Una dirección" size="30"  />
                            <a id="from-link" href="#">Obtener mi posición</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="to" class="col-sm-2 control-label">Hacia: </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="to" name="to" required="required" placeholder="Otra dirección" size="30" value="<?php echo("$eveDetalle->eve_direccion") ?> ,Guadalajara de Buga" />
                        </div>
                    </div>
                    <br/>
                    <input class=" btn btn-default" type="submit" />
                    <input class=" btn btn-default"  type="reset" />
                </form>
                <div  class="container container-fluid col-md-6" id="map"></div>
                
            </div>
                <div class="container container-fluid col-md-12">
                    <h4 id="error"></h4>
                </div>
                <style type="text/css">
                #map {
                    width: 500px;
                    height: 400px;
                    margin-top: 10px;
                }
            </style>
<!--                 <div class="container container-fluid">

                <form class="mapa" id="calculate-route" name="calculate-route" action="#" method="get">
                    <h1>Ubicación</h1>
                    <label for="from">Desde:</label>
                    <input type="text" id="from" name="from" required="required" placeholder="Una dirección" size="30"  />
                    <a id="from-link" href="#">Obtener mi posición</a>
                    <br/>
                    <label for="to">Hacia:</label>
                    <input type="text" id="to" name="to" required="required" placeholder="Otra dirección" size="30" value="<?php echo("$eveDetalle->eve_direccion") ?> ,Guadalajara de Buga" />
                    <a id="to-link" href="#">Obtener mi posición</a>
                    <br />
                    <input type="submit" />
                    <input type="reset" />
                </form>
                <div  class="container container-fluid" id="map"></div>
                <p id="error"></p>
            </div>-->
        
            <?php if (Session::has("usuarioLogueado")): ?>
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                <div class="fb-comments" data-href="<?php echo url("home/eventos/det/" . $eveDetalle->eve_id) ?>" data-numposts="5"></div>
            <?php endif ?>
            @include('Templates.Frontend.footer')
            @include('Templates.Frontend.foot')