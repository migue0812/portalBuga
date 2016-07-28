@include('Templates.Frontend.head')
@include('Templates.Frontend.header')

<div class="container">
  <div class="row">
    <div class="box ">

      <div class="col-lg-12">
        <div class="visitNav">
          <div>
            <h2 class="text-center">SITIOS TURISTICOS</h2>
          </div>
        </div>
        <hr class="tagline-divider-cont">
      </div>

      <?php foreach ($sitios as $sitio): ?>
        <div class="portImg">
          <div class="row">

            <div class="col-md-6 portfolio-item">
              <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>">
                <img class="img-contenido img-resposive thumbnail" src="<?php echo asset("$sitio->img_ruta") ?>" alt="">
              </a>
            </div>


            <div class="col-md-5 portfolio-item">
              <h2 class="text-center"><?php echo ($sitio->sit_nombre) ?></h2>
              <hr class="tagline-divider-cont">
              <p class="">
                <?php echo ((strlen($sitio->sit_descripcion) > 200) ? substr(($sitio->sit_descripcion), 0, 200) . " ..." : ($sitio->sit_descripcion)) ?>
              </p>
              <a class="decoration" href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>">
              <button class="center-block btn btn-primary ">Ver mas</button>
              </a>

              <?php if (Session::has("usuarioLogueado")): ?>
                <a href="<?php echo url("itinerario/sitio/" . $sitio->sit_id) ?>" class="btn btn-primary">
                  <b title="Itinerario" class="icon-direction fa-fw"></b>
                </a>
              <?php endif ?>
            </div>
          </div>
        </div>
        <br>
        <?php
      endforeach
      ?>


      <div class="visitNav">
        <h2 class="text-center">MAS SITIOS TURISTICOS</h2>
      </div>
      <hr class="tagline-divider-cont">
      <div>
        <div class="row ">
          <?php
          foreach ($sitios2 as $sitio):
            ?>

            <div class="col-md-4 portfolio-item">
              <div class="imgSitios">
                <div class="contenedor-imgX fxX"> 
                  <div id="tituloalz">
                    <h2><?php echo ($sitio->sit_nombre) ?></h2>
                  </div>
                  <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>">
                    <div class="imgback img-contenido" style=" background-image: url('<?php echo asset("$sitio->img_ruta") ?>');">
                    </div>
                  </a>
                  <p class="text-justify2">
                    <?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 100) . " ..." : ($sitio->sit_descripcion)) ?>
                  </p>
                  <a class="decoration" href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>">
                  <button class="center-block btn btn-primary">Ver mas</button>
                  </a>
                  <?php if (Session::has("usuarioLogueado")): ?>
                    <a href="<?php echo url("itinerario/sitio/" . $sitio->sit_id) ?>" class="btn btn-primary">
                      <b title="Itinerario" class="icon-direction fa-fw"></b>
                    </a>
                  <?php endif ?>
                </div>
              </div>
            </div>

            <?php
          endforeach
          ?>
        </div>
      </div>
      <center> <div>
          <nav>
            <ul class="pagination pagination-lg">

              <?php
              for ($x = 1; $x <= $paginas; $x++) {
                echo "<li><a href='sitios?page=" . $x . "'>" . $x . "</a></li>";
              }
              ?>
            </ul>
          </nav>
        </div></center>

      @include('Templates.Frontend.footer')
      @include('Templates.Frontend.foot')

