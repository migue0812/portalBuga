@include('Templates.Frontend.head')
@include('Templates.Frontend.header')

<style type="text/css">

  .glyphicon-thumbs-up:hover{ color:#008000; cursor:pointer;}
  .glyphicon-thumbs-down:hover{ color: #E10000; cursor:pointer;}
  .counter{ color:#333333;}
  .thumbnail img{height:200px;}
  span.glyphicon-thumbs-up{
    font-size: 54px
  }
  span.glyphicon-thumbs-down{
    font-size: 54px
  }
  .dedo{
    font-size: 30px;
    color:green;
  }
  .dedo2{
    font-size: 30px;
    color:red;
  }
  A:link, A:visited { text-decoration: none }
</style>

<div class="container">
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <div class="visitNav">
          <div>
            <h2 class="text-center">Detalles del Sitio</h2>
          </div>
        </div>
        <hr class="tagline-divider-cont">
      </div>

      <!-- Projects Row -->

      <div class="row ">          
        <div class="col-xs-12 col-md-6 portfolio-item">
          <a href="">
            <img class="img-responsive img-contenido" src="<?php echo asset("$sitDetalle->img_ruta") ?>" alt="">
          </a>
        </div>
        <div class="col-xs-12 col-md-6 ">
          <div class="col-xs-7 col-sm-4">
            <h3 title="Direccion" class="fa fa-map-marker fa-2x" style="color:#C91414" aria-hidden="true"><b></b></h3>
            <p><?php echo ($sitDetalle->sit_direccion) ?></p>
          </div>

          <div class="col-xs-5 col-sm-4">
            <h3 title="Telefono" class="fa fa-mobile fa-2x" aria-hidden="true"><b></b></h3>
            <p><?php echo ($sitDetalle->sit_telefono) ?></p>
          </div>

          <div class="col-xs-12 col-sm-4 center-block">
            <p>
              <!-- Like Icon HTML -->
              <a href="<?php echo url("home/sitios/like/" . $sitDetalle->sit_id) ?>"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;</a>
              <!-- Like Counter -->
              <span class="dedo" id="like_count<?php ?>"><?php echo $sitDetalle->like_num ?></span>&nbsp;&nbsp;&nbsp;

              <!-- Dislike Icon HTML -->
              <a href="<?php echo url("home/sitios/dislike/" . $sitDetalle->sit_id) ?>"><span class="glyphicon glyphicon-thumbs-down"></span>&nbsp;</a>
              <!-- Dislike Counter -->
              <span class="dedo2" id="dislike_count<?php ?>"><?php echo $sitDetalle->dislike_num ?></span>

            </p>
          </div>
        </div>
        <br>
        <div class="col-md-12 portfolio-item">
          <div class="parrafoSitio">
            <h2 class="tituloSitio text-center"><?php echo ($sitDetalle->sit_nombre) ?></h2>
            <br>
            <p class="text-justify2"><?php echo ($sitDetalle->sit_descripcion) ?></p>
          </div>
        </div>
      </div>

      <!-- efecto imgs -->
      <div>
        <h2 class="text-center">Imagenes Del Sitio</h2>
        <hr class="tagline-divider-cont">
      </div>

      <?php if (!empty($imagenes[0]->img_ruta)): ?>
        <div class="col-md-4 col-sm-6 evento-item">
          <a href="#1" class="evento-link" data-toggle="modal">
            <div class="evento-hover">
              <div class="evento-hover-content">
              </div>
            </div>
            <img src="<?php echo asset($imagenes[0]->img_ruta) ?>" class="img-responsive" alt="">
          </a>
        </div>
      <?php endif ?>
      <?php if (!empty($imagenes[1]->img_ruta)): ?>

        <div class="col-md-4 col-sm-6 evento-item">
          <a href="#2" class="evento-link" data-toggle="modal">
            <div class="evento-hover">
              <div class="evento-hover-content">
              </div>
            </div>
            <img src="<?php echo asset($imagenes[1]->img_ruta) ?>" class="img-responsive" alt="">
          </a>
        </div>
      <?php endif ?>
      <?php if (!empty($imagenes[2]->img_ruta)): ?>

        <div class="col-md-4 col-sm-6 evento-item">
          <a href="#3" class="evento-link" data-toggle="modal">
            <div class="evento-hover">
              <div class="evento-hover-content">
              </div>
            </div>
            <img src="<?php echo asset($imagenes[2]->img_ruta) ?>" class="img-responsive" alt="">
          </a>
        </div>
      <?php endif ?>
      <?php if (!empty($imagenes[0]->img_ruta)): ?>

        <!-- efecto IMG GRANDE(modal1) -->
        <div class="portfolio-modal modal fade" id="1" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="boxModal">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl">
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <div class="modal-body">
                    <!-- Project Details Go Here -->
                    <h2 style="margin-top: 20px; text-align: center"><?php echo ($sitDetalle->sit_nombre) ?></h2>

                    <img class="img-responsive img-centered" src="<?php echo asset($imagenes[0]->img_ruta) ?>" class="img-responsive" alt="">

                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      <?php endif ?>
      <?php if (!empty($imagenes[1]->img_ruta)): ?>

        <!-- efecto IMG GRANDE(modal1) -->

        <div class="portfolio-modal modal fade" id="2" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="boxModal">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl">
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <div class="modal-body">
                    <!-- Project Details Go Here -->
                    <h2 style="margin-top: 20px; text-align: center"><?php echo ($sitDetalle->sit_nombre) ?></h2>

                    <img class="img-responsive img-centered" src="<?php echo asset($imagenes[1]->img_ruta) ?>" class="img-responsive" alt="">

                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      <?php endif ?>
      <?php if (!empty($imagenes[2]->img_ruta)): ?>

        <!-- efecto IMG GRANDE(modal1) -->
        <div class="portfolio-modal modal fade" id="3" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="boxModal">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl">
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <div class="modal-body">
                    <!-- Project Details Go Here -->
                    <h2 style="margin-top: 20px; text-align: center"><?php echo ($sitDetalle->sit_nombre) ?></h2>

                    <img class="img-responsive img-centered" src="<?php echo asset($imagenes[2]->img_ruta) ?>" class="img-responsive" alt="">

                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      <?php endif ?>    
      @include('Templates.Frontend.footer')
      @include('Templates.Frontend.foot')