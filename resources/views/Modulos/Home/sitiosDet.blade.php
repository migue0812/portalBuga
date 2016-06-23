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

      <div class="row">

        <div class="col-lg-12">
            <?php if (!empty($imagenes[0]->img_ruta)): ?>
          <div class="col-md-4 col-xs-6 Sitios-deta">
            <a class="thumbnail " href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery1">
              <img class="img-responsive img-thumbnail" src="<?php echo asset($imagenes[0]->img_ruta) ?>" alt="Short alt text">
            </a>
          </div>
            <?php endif ?>
            <?php if (!empty($imagenes[1]->img_ruta)): ?>
          <div class="col-md-4 col-xs-6 Sitios-deta">
            <a class="thumbnail " href="#" data-image-id="" data-toggle="modal" data-title="The car i dream about" data-caption="If you sponsor me, I can drive this car" data-image="http://www.picturesnew.com/media/images/car-image.jpg" data-target="#image-gallery2">
              <img class="img-responsive img-thumbnail" src="<?php echo asset($imagenes[1]->img_ruta) ?>" alt="A alt text">
            </a>
          </div>
            <?php endif ?>
            <?php if (!empty($imagenes[2]->img_ruta)): ?>
          <div class="col-md-4 col-xs-6 Sitios-deta">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-caption="And if there is money left, my girlfriend will receive this car" data-image="http://upload.wikimedia.org/wikipedia/commons/7/78/1997_Fiat_Panda.JPG" data-target="#image-gallery3">
              <img class="img-responsive img-thumbnail" src="<?php echo asset($imagenes[2]->img_ruta) ?>" alt="Another alt text">
            </a>
          </div>
            <?php endif ?>
        </div>

<!-- modal1 -->
<?php if (!empty($imagenes[0]->img_ruta)): ?>
        <div class="modal fade" id="image-gallery1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
              </div>
              <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="<?php echo asset($imagenes[0]->img_ruta) ?>">
              </div>
              <div class="modal-footer">

                <div class="col-md-2">
                  <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                  This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                  <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php endif ?>

          <!-- modal2 -->
          <?php if (!empty($imagenes[1]->img_ruta)): ?>
          <div class="modal fade" id="image-gallery2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
              </div>
              <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="<?php echo asset($imagenes[1]->img_ruta) ?>">
              </div>
              <div class="modal-footer">

                <div class="col-md-2">
                  <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                  This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                  <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
          <?php endif ?>
          
          <!-- modal3 -->
          <?php if (!empty($imagenes[2]->img_ruta)): ?>
          <div class="modal fade" id="image-gallery3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
              </div>
              <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="<?php echo asset($imagenes[2]->img_ruta) ?>">
              </div>
              <div class="modal-footer">

                <div class="col-md-2">
                  <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                  This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                  <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
          <?php endif ?>
      </div>

      <script>
        $(document).ready(function () {

          loadGallery(true, 'a.thumbnail');

          //This function disables buttons when needed
          function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image').show();
            if (counter_max == counter_current) {
              $('#show-next-image').hide();
            } else if (counter_current == 1) {
              $('#show-previous-image').hide();
            }
          }

          /**
           *
           * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
           * @param setClickAttr  Sets the attribute for the click handler.
           */

          function loadGallery(setIDs, setClickAttr) {
            var current_image,
                    selector,
                    counter = 0;

            $('#show-next-image, #show-previous-image').click(function () {
              if ($(this).attr('id') == 'show-previous-image') {
                current_image--;
              } else {
                current_image++;
              }

              selector = $('[data-image-id="' + current_image + '"]');
              updateGallery(selector);
            });

            function updateGallery(selector) {
              var $sel = selector;
              current_image = $sel.data('image-id');
              $('#image-gallery-caption').text($sel.data('caption'));
              $('#image-gallery-title').text($sel.data('title'));
              $('#image-gallery-image').attr('src', $sel.data('image'));
              disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
              $('[data-image-id]').each(function () {
                counter++;
                $(this).attr('data-image-id', counter);
              });
            }
            $(setClickAttr).on('click', function () {
              updateGallery($(this));
            });
          }
        });
      </script>
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

                <div class="fb-comments" data-href="<?php echo url("home/sitios/det/" . $sitDetalle->sit_id) ?>" data-numposts="5"></div>
            <?php endif ?>

      @include('Templates.Frontend.footer')
      @include('Templates.Frontend.foot')