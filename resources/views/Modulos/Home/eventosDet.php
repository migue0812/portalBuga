<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
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
            <hr class="tagline-divider-cont">

            <!-- Projects Row -->

            <div class="col-md-6 portfolio-item">
                <a href="se devuleve al index">
                    <img class="img-responsive" src="<?php echo asset("$eveDetalle->img_ruta") ?>" alt="">
                </a>

            </div>
            <div class="botoness">
                <div class="col-md-2 portfolio-item">
                    <h3 title="Direccion" class="icon-location fa-fw"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_direccion") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Duraccion" class=" icon-calendar fa-fw"><b>:</b></h3><p>Del <?php echo("$eveDetalle->eve_fecha_inicio") ?> hasta el <?php echo("$eveDetalle->eve_fecha_fin") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Valor" class=" icon-usd fa-fw"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_valor_boleta") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Celular" class="icon-mobile"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_telefono_contacto") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Hora" class="icon-clock"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_fecha_hora") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Correo" class=" icon-mail fa-fw"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_correo_contacto") ?></p>
                </div>
            </div>
            <div class="col-md-5 col-sm-11 portfolio-item">
                <h2 style="margin-top: 60px;"><?php echo("$eveDetalle->eve_nombre") ?></h2>
                <p style="margin-top:20px; "class="text-justify"><?php echo("$eveDetalle->eve_descripcion") ?></p>
            </div>
        </div>
    </div>

   <div class="row">
        <div class="box">
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

            <div class="fb-comments" data-href="https://www.facebook.com/groups/860979787324031/?fref=ts" data-numposts="5"></div>
</div>
    </div>
   <div class="row">
        <div class="box">
            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?>

    </div>
    </div>
</div>        
            