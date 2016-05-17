<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
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
                    <?php foreach($eventos2 as $evento2): ?>
                    <div class="item active">
                        <!-- Imagen 1 -->
                        <div class="fill img-responsive" style="background-image:url(<?php  echo asset("$evento2->img_ruta") ?>);"></div>
                        <div class="carousel-caption">
                            <h2><?php echo("$evento2->eve_nombre") ?></h2>
                            <span>Descripcion</span>
                        </div>
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
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="box">
            <!-- Final Slides -->
            
            <div class="visitNav">
                <div>
                    <h2 style="text-align: center;">Eventos Principales</h2>
                </div>
            </div>
            <hr>
            <?php foreach($eventos as $evento):?>
            <div class="container portImg">
                <div class="row ">
                    <div class="col-md-6 portfolio-item">
                        <a href="<?php echo url("home/eventos/det") ?>">
                            <img style="float: right; border-radius: 20px;"  class="img-responsive" src="<?php echo asset("$evento->img_ruta") ?>" alt="">
                        </a>

                    </div>
                    <div class="col-md-5 portfolio-item">
                        <h2 style="text-align: center"><?php echo ($evento->eve_nombre) ?></h2>
                        <hr class="hrWhat">
                        <p class="text-justify"><?php echo ($evento->eve_descripcion) ?></p>
                                              <a href="<?php echo url("home/eventos/det") ?>" class="btn btn-primary"><b title="Ver mas"class="icon-plus fa-fw"></b></a>
               <a href="<?php echo url("itinerario/evento") ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
                        
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <div class="visitNav">
                    <div>
                        <h2 style="text-align: center;">Mas Eventos</h2>
                    </div>
                </div>
                <hr class="tagline-divider-cont">
            </div>
            <div class="portafolio">
                <?php foreach ($eventos2 as $evento2):?>
                <div class="col-sm-4 portfolio-item">
                    <img class="img-responsive" src="<?php echo asset($evento2->img_ruta) ?>" alt="">
                    <h3 style="color:blue;">
                        <?php echo ($evento2->eve_nombre) ?>
                    </h3>
                    <p><?php echo ($evento2->eve_descripcion) ?></p>
                    <a href="<?php echo asset("home/eventos/det") ?>">
                        <button type="button" class="btn btn-primary">Ver Mas</button>
                         
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
  

<script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    });
</script>

<div class="container">
   <div class="row">
        <div class="box">
            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?>
</div>
    </div>
</div>