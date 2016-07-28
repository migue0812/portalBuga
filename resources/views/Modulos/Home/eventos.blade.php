@include('Templates.Frontend.head')
@include('Templates.Frontend.header')
<!-- Comienzo Slides -->
<!-- Carousel Header -->
<div class="container">
  <div class="row">
    <div class="box">
      <header id="myCarousel" class="carousel slide">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
          <?php foreach ($eventos2 as $evento2): ?>
            <div class="item-active">
              <!-- Imagen 1 -->
              <div class="fill img-responsive" style="background-image:url(<?php echo asset("$evento2->img_ruta") ?>);"></div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Controles -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
      </header>

      <!-- Final Slides -->

      <div class="row">
        <div class="col-lg-12">
          <div class="visitNav">
            <div>
              <h2 class="text-center">Eventos Principales</h2>
            </div>
          </div>
          <hr class="tagline-divider-cont">
        </div>
        <div class="col-lg-12">
          <?php foreach ($eventos as $evento): ?>
            <div class="col-xs-12 col-md-6 col-lg-7">
              <a href="<?php echo url("home/eventos/det/" . $evento->eve_id) ?>">
                <img class="img-responsive thumbnail" src="<?php echo asset("$evento->img_ruta") ?>" alt=" ">
              </a>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-5">
              <h3 class="text-center">
                <?php echo ($evento->eve_nombre) ?>
              </h3>
              <hr class="tagline-divider-event">
              <p class="text-justify"><?php echo ((strlen($evento->eve_descripcion) > 200) ? substr(($evento->eve_descripcion), 0, 200) . " ..." : ($evento->eve_descripcion)) ?></p>
              <a class="decoration" href="<?php echo url("home/eventos/det/" . $evento->eve_id) ?>" class="">
                <button class="portfolio-item center-block btn btn-primary ">Ver mas</button>
              </a>
              <?php if (Session::has("usuarioLogueado")): ?>
                <a href="<?php echo url("itinerario/eventos/" . $evento->eve_id) ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
              <?php endif ?>
            </div>
          <?php endforeach ?>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
          <div class="visitNav">
            <div>
              <h2 class="text-center">Mas Eventos</h2>
            </div>
          </div>
          <hr class="tagline-divider-cont">
        </div>
        <div class="portfolio">
          <?php foreach ($eventos2 as $evento2): ?>
            <div class="col-xs-12 col-md-4">
              <div>
                <a href="<?php echo asset("home/eventos/det/" . $evento2->eve_id) ?>">
                  <img class="img-responsive thumbnail" src="<?php echo asset($evento2->img_ruta) ?>" alt="">
                </a>
              </div>
              <div>
                <h3 class="text-center">
                  <a class="anim-underline" href="<?php echo asset("home/eventos/det/" . $evento2->eve_id) ?>"><?php echo ($evento2->eve_nombre) ?></a>
                </h3>
              </div>
              <div
                <p class="text-justify"><?php echo ((strlen($evento2->eve_descripcion) > 100) ? substr(($evento2->eve_descripcion), 0, 100) . " ..." : ($evento2->eve_descripcion)) ?></p>
              </div>
              <div>
                <a class="decoration" href="<?php echo asset("home/eventos/det/" . $evento2->eve_id) ?>">
                  <button class="portfolio-item center-block btn btn-primary ">Ver mas</button>
                  <?php if (Session::has("usuarioLogueado")): ?>
                    <a href="<?php echo url("itinerario/eventos/" . $evento2->eve_id) ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
                  <?php endif ?>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <center> <div>
          <nav>
            <ul class="pagination pagination-lg">

              <?php
              for ($x = 1; $x <= $paginas; $x++) {
                echo "<li><a href='eventos?page=" . $x . "'>" . $x . "</a></li>";
              }
              ?>
            </ul>
          </nav>
        </div></center>
      @include('Templates.Frontend.footer')
      @include('Templates.Frontend.foot')