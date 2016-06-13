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
            <div class="item active">
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
      <div class="row">
        <div class="col-lg-12">
          <div class="visitNav">
            <div>
              <h2 class="text-center">Eventos Principales</h2>
            </div>
          </div>
          <hr class="tagline-divider-cont">
        </div>


        <?php foreach ($eventos as $evento): ?>

          <!-- Final Slides -->



          <div class="container portImg">
            <div class="row ">
              <div class="col-md-6 portfolio-item">
                <a href="<?php echo url("home/eventos/det/" . $evento->eve_id) ?>">
                  <img class="img-responsive border-img" src="<?php echo asset("$evento->img_ruta") ?>" alt="">
                </a>

              </div>
              <div class="col-md-5 portfolio-item">
                <h2 class="text-center"><?php echo ($evento->eve_nombre) ?></h2>
                <hr class="tagline-divider-cont">
                <p class="text-justify"><?php echo ((strlen($evento->eve_descripcion) > 200) ? substr(($evento->eve_descripcion), 0, 200) . " ..." : ($evento->eve_descripcion)) ?></p>
                <a href="<?php echo url("home/eventos/det/" . $evento->eve_id) ?>" class="btn btn-primary"><b title="Ver mas"class="icon-plus fa-fw"></b></a>
                <?php if (Session::has("usuarioLogueado")): ?>
                  <a href="<?php echo url("itinerario/eventos/" . $evento->eve_id) ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
                <?php endif ?>
              </div>


            <?php endforeach ?>
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
            <div class="portafolio">
              <?php foreach ($eventos2 as $evento2): ?>
                <div class="col-sm-4 portfolio-item">
                  <img class="img-responsive thumbnail" src="<?php echo asset($evento2->img_ruta) ?>" alt="">
                  <h3>
                    <a class="color-enlace" href="<?php echo asset("home/eventos/det/" . $evento->eve_id) ?>"><?php echo ($evento2->eve_nombre) ?></a>
                  </h3>
                  <p><?php echo ((strlen($evento->eve_descripcion) > 30) ? substr(($evento->eve_descripcion), 0, 30) . " ..." : ($evento->eve_descripcion)) ?></p>
                  <a href="<?php echo asset("home/eventos/det/" . $evento->eve_id) ?>">
                    <button type="button" class="btn btn-primary">Ver Mas</button>
                    <br>
                    <br>
                    <?php if (Session::has("usuarioLogueado")): ?>
                      <a href="<?php echo url("itinerario/eventos/" . $evento->eve_id) ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
                      <?php endif ?>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>



          </div>
        </div>

        <script>           $('.carousel').carousel({
            interval: 3000 //changes the speed
          });
        </script>


        @include('Templates.Frontend.footer')
        @include('Templates.Frontend.foot')
