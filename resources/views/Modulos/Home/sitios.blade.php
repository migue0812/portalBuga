@include('Templates.Frontend.head')
@include('Templates.Frontend.header')

<div class="container">
  <div class="row">
    <div class="box boxSitio">
      <div class="visitNav">
        <h2 style="text-align: center">SITIOS TURISTICOS DE BUGA</h2>
      </div>

      <hr class="tagline-divider-cont">
      <?php foreach ($sitios as $sitio): ?>
        <div class="container portImg">
          <div class="row ">

            <div class="col-md-6 portfolio-item">
              <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>">
              <img style="float: right;"  class="img-responsive img-Sitios" src="<?php echo asset("$sitio->img_ruta") ?>" alt="">
              </a>

            </div>

              
            <div class="col-md-5 portfolio-item">
              <h2 style="text-align: center"><?php echo ($sitio->sit_nombre) ?></h2>
              <hr class="tagline-divider-cont">
              <br>
              <p class="text-justify"><?php echo ((strlen($sitio->sit_descripcion) > 200) ? substr(($sitio->sit_descripcion), 0, 200) . " ..." : ($sitio->sit_descripcion)) ?></p>
              <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Ver mas"class="fa fa-eye"></b></a>
              <?php if (Session::has("usuarioLogueado")): ?>
                <a href="<?php echo url("itinerario/sitio/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
              <?php endif ?>
            </div>
          </div>
        </div>
        <br>
        <?php
      endforeach
      ?>


      <div class="visitNav">
      </div>
      <h2 style="text-align: center">MAS SITIOS TURISTICOS</h2>
      <hr class="tagline-divider-cont">
      <?php
      foreach ($sitios2 as $sitio):
        ?>
        <div class="col-md-4 portfolio-item imgSitios">
            <div class="contenedor-imgX fxX">
          <div id="tituloalz"><h2><?php echo ($sitio->sit_nombre) ?></h2></div>
          <div class="imgback img-contenido" style=" background-image: url('<?php echo asset("$sitio->img_ruta") ?>');"> </div>
          <p><?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 100) . " ..." : ($sitio->sit_descripcion)) ?></p>
          <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Ver mas"class="fa fa-eye"></b></a>
          <?php if (Session::has("usuarioLogueado")): ?>
            <a href="<?php echo url("itinerario/sitio/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
          <?php endif ?>
         
            </div>
        </div>
        <?php
      endforeach
      ?>

      <div class="col-md-12 portfolio-item">
      @include('Templates.Frontend.footer')
      @include('Templates.Frontend.foot')
      </div>
