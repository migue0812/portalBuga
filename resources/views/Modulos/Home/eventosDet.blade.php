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
      <div class="col-md-6 portfolio-item">
        <a href="se devuleve al index">
          <img class="img-responsive" src="<?php echo asset("$eveDetalle->img_ruta") ?>" alt="">
        </a>

      </div>
      <div class="botoness">
        <div class="col-md-2 portfolio-item">
          <h3 title="Lugar"  class="fa fa-home fa-2x" aria-hidden="true"><b></b></h3>
          <p><?php echo("$eveDetalle->eve_direccion") ?></p>
        </div>
        <div class="col-md-2 portfolio-item">
            <h3 title="Direccion" class="fa fa-map-marker fa-2x" style="color:#C91414" aria-hidden="true"><b></b></h3>
          <p><?php echo("$eveDetalle->eve_direccion") ?></p>
        </div>
        <div class="col-md-2 portfolio-item">
         <h3 title="Duracion" class=" fa fa-calendar fa-2x" style="color:blue" aria-hidden="true"><b></b></h3><p>Del <?php echo("$eveDetalle->eve_fecha_inicio") ?> hasta el <?php echo("$eveDetalle->eve_fecha_fin") ?></p>
        </div> 
        <div class="col-md-2 portfolio-item">
          <h3 title="Valor Por Persona" class="fa fa-money fa-2x" style="color:green" aria-hidden="true"><b></b></h3>
          <p><?php echo("$eveDetalle->eve_valor_boleta") ?></p>
        </div>
        <div class="col-md-2 portfolio-item">
          <h3 title="Celular" class="fa fa-mobile fa-2x" aria-hidden="true"><b></b></h3>
          <p><?php echo("$eveDetalle->eve_telefono_contacto") ?></p>
        </div>
        <div class="col-md-2 portfolio-item">
          <h3 title="Hora" class="fa fa-clock-o fa-2x" style="color:#170C46;" aria-hidden="true"><b></b></h3>
          <p><?php echo("$eveDetalle->eve_fecha_hora") ?></p>
        </div>
        <div class="col-md-2 portfolio-item">
            <h3 title="Correo" class="fa fa-envelope-o fa-2x" style="color:#D52727;" aria-hidden="true"><b></b></h3>
          <p><?php echo("$eveDetalle->eve_correo_contacto") ?></p>
        </div>
      </div>
      <div class="col-md-5 col-sm-11 portfolio-item">
        <h2 style="margin-top: 60px;"><?php echo("$eveDetalle->eve_nombre") ?></h2>
        <p style="margin-top:20px; "class="text-justify"><?php echo("$eveDetalle->eve_descripcion") ?></p>
      </div>

</div>
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