
@include('Templates.Frontend.head')
@include('Templates.Frontend.header')

<div class="container">
  <div class="box">
    <div>
      <div class="visitNav">
        <div>
          <h2 class="text-center size"><?php echo $subcatDetalle->subcat_nombre ?></h2>
        </div>
      </div>
      <hr class="tagline-divider-cont">

      <!-- Projects Row -->
      <div>
        <div class="row ">
          <div class="col-md-12 portfolio-item">
            <a href="#">
              <img class="img-responsive" src="<?php echo asset("$subcatDetalle->img_ruta") ?>" alt="">     
            </a>
          </div>
            <br>

          <div class="col-sm-12  portfolio-item">
              <br>
            <p class="text-justify2"> <?php echo $subcatDetalle->subcat_descripcion ?></p>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="box">
    <div class="">
      <div class="col-lg-12">
        <div class="visitNav">
          <div>
            <h2 class="text-center size">Sitios relacionados</h2>
          </div>
        </div>
        <hr class="tagline-divider-cont">
      </div>
      <div class="portafolio row">
        <?php
        foreach ($sitios as $sitio):
          ?>
          <div class="col-sm-4 portfolio-item">
            <img class="img-responsive tam thumbnail" src="<?php echo asset("$sitio->img_ruta") ?>" alt="">
            <h3 class="text-center size" style="color:blue;">
              <?php echo $sitio->sit_nombre ?>
            </h3>
          
            <p class="text-justify2"><?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 100) . " ..." : ($sitio->sit_descripcion)) ?></p>
            <br>
            <a href="<?php echo asset("home/sitios/det/" . $sitio->sit_id) ?>">
              <button type="button" class="btn btn-primary">Ver Mas</button>
            </a>
          </div>

        <?php endforeach ?>
      </div>
    </div>

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

    <!-- /.row -->
    <!-- Script to Activate the Carousel -->
    <script>
      $('.carousel').carousel({
        interval: 3000 //changes the speed
      });
    </script>


    @include('Templates.Frontend.footer')
    @include('Templates.Frontend.foot')

