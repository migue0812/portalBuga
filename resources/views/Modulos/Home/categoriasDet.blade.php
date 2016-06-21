@include('Templates.Frontend.head')
@include('Templates.Frontend.header')

<div class="container">
  <div class="box">
    <div>
      <div class="visitNav">
        <div>
          <h2 class="text-center size">Detalle Categoria</h2>
        </div>
      </div>
      <hr class="tagline-divider-cont">

      <!-- Projects Row -->
      <div>
        <div class="row ">
          <div class="col-md-12 portfolio-item">
            <a href="#">
              <img class="img-responsive" src="<?php echo asset("$catDetalle->img_ruta") ?>" alt="">     
            </a>
          </div>

          <div class="col-sm-12  portfolio-item">
            <h2 class="text-center size"><?php echo $catDetalle->cat_nombre ?></h2>
            <p class="text-justify2"> <?php echo $catDetalle->cat_descripcion ?></p>
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
            <h2 class="text-center size">Contenido relacionado a la Categoría</h2>
          </div>
        </div>
        <hr class="tagline-divider-cont">
      </div>
      <div class="portafolio row">
        <?php
        foreach ($subcategorias as $subcategoria):
          ?>
          <div class="col-sm-4 portfolio-item">
            <img class="img-responsive tam thumbnail" src="<?php echo asset("$subcategoria->img_ruta") ?>" alt="">
            <h3 class="text-center size" style="color:blue;">
              <?php echo $subcategoria->subcat_nombre ?>
            </h3>
            <p class="text-justify2"><?php echo ((strlen($subcategoria->subcat_descripcion) > 100) ? substr(($subcategoria->subcat_descripcion), 0, 100) . " ..." : ($subcategoria->subcat_descripcion)) ?></p>
            <a href="<?php echo asset("home/subCat/index/" . $subcategoria->subcat_id) ?>">
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

    <div class="fb-comments" data-href="<?php echo url("home/categorias/det/" . $catDetalle->cat_id) ?>" data-numposts="5"></div>

    <!-- /.row -->
    <!-- Script to Activate the Carousel -->
    <script>
      $('.carousel').carousel({
        interval: 3000 //changes the speed
      });
    </script>

    @include('Templates.Frontend.footer')
    @include('Templates.Frontend.foot')
