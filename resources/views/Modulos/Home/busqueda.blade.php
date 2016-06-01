@include('Templates.Frontend.head')
@include('Templates.Frontend.header')
<div class="container">
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <div class="visitNav">
          <div>
            <h2 style="text-align: center;">Resultados De Tu Busqueda</h2>
          </div>
        </div>
        <hr class="tagline-divider-cont">
      </div>

      <div>
        <h2 style="text-align: center;"> Sitios</h2>
      </div>
      <?php foreach ($resultados as $resultado): ?>
        <div class="col-md-4 text-center">
          <article class="articulo">    
            <a>
              <img class="img-responsive" src="<?php echo asset("$resultado->img_ruta") ?>" alt="">
            </a>
            <h5 class="">
              <a href="#"><?php echo ((strlen($resultado->sit_nombre) > 15) ? substr(($resultado->sit_nombre), 0, 15) . " ..." : ($resultado->sit_nombre)) ?></a>
            </h5>
            <p><span class="articulofecha"></span><span class="articulo-autor"><a href="#"></a></span></p>
            <p class="articulo-contenido">
            </p>
            <div class="contenedor-botones">
              <a href="<?php echo url("home/sitios/det/" . $resultado->sit_id) ?>" class="btn btn-primary">Ver Mas</a>
            </div>
          </article>
        </div>
      <?php endforeach ?>
      <div>
        <h2 style="text-align: center;">Eventos</h2>
      </div>
      <?php foreach ($eventos as $evento): ?>
        <div class="col-md-4 text-center">
          <article class="articulo">    
            <a>
              <img class="img-responsive" src="<?php echo asset("$evento->img_ruta") ?>" alt="">
            </a>
            <h5 class="">
              <a href="#"><?php echo ((strlen($evento->eve_nombre) > 15) ? substr(($evento->eve_nombre), 0, 15) . " ..." : ($evento->eve_nombre)) ?></a>
            </h5>
            <p><span class="articulofecha"></span><span class="articulo-autor"><a href="#"></a></span></p>
            <p class="articulo-contenido">
            </p>
            <div class="contenedor-botones">
              <a href="<?php echo url("home/evento/det/" . $evento->eve_id) ?>" class="btn btn-primary">Ver Mas</a>
            </div>
          </article>
        </div>
      <?php endforeach ?>



      <div class="container">
        <div class="col-lg-12">
          @include('Templates.Frontend.footer')
          @include('Templates.Frontend.foot')
        </div>
      </div>

