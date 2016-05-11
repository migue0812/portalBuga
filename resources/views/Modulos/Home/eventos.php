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
                    <div class="item active">
                        <!-- Imagen 1 -->
                        <div class="fill img-responsive" style="background-image:url('../..//..//..//public/img/1.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>Caption 1</h2>
                            <span>Descripcion</span>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Imagen 2 -->
                        <div class="fill" style="background-image:url('../..//..//..//public/img/2.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>Caption 2</h2>
                            <span>Descripcion</span>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Imagen 3 -->
                        <div class="fill" style="background-image:url('../..//..//..//public/img/3.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>Caption 3</h2>
                            <span>Descripcion</span>
                        </div>
                    </div>
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
            <div class="container portImg">
                <div class="row ">
                    <div class="col-md-6 portfolio-item">
                        <a href="<?php echo url("home/eventos/det") ?>">
                            <img style="float: right; border-radius: 20px;"  class="img-responsive" src="<?php echo asset("img/ferias.jpg") ?>" alt="">
                        </a>

                    </div>
                    <div class="col-md-5 portfolio-item">
                        <h2 style="text-align: center">Ferias De Buga</h2>
                        <hr class="hrWhat">
                        <p class="text-justify">Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana.. Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en e Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Ale
                            Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Al </p>
                                              <a href="<?php echo url("home/eventos/det") ?>" class="btn btn-primary"><b title="Ver mas"class="icon-plus fa-fw"></b></a>
               <a href="<?php echo url("itinerario/evento") ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="box">
            <!-- Final Slides -->


            <div class="container portImg">
                <div class="row ">
                    <div class="col-md-5 portfolio-item">
                        <h2 style="text-align: center">Buga Innova</h2>
                        <hr class="hrWhat">
                        <p class="text-justify">Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana.. Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en e Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Ale
                            Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Al </p>
                        <a href="<?php echo url("home/eventos/det") ?>" class="btn btn-primary"><b title="Ver mas"class="icon-plus fa-fw"></b></a>
               <a href="<?php echo url("itinerario/evento") ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
                    </div>
                    <div class="col-md-6 portfolio-item">
                        <a href="se devuleve al index">
                            <img style="float: right; border-radius: 20px; " class="img-responsive" src="<?php echo asset("img/lol.jpg") ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
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
                <div class="col-sm-4 portfolio-item">
                    <img class="img-responsive" src="<?php echo asset("img/ferias.jpg") ?>" alt="">
                    <h3 style="color:blue;">
                        Ferias De Buga
                    </h3>
                    <p>Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana..... </p>
                    <a href="<?php echo asset("home/eventos/det") ?>">
                        <button type="button" class="btn btn-primary">Ver Mas</button>
                         
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <img class="img-responsive" src="<?php echo asset("img/ferias.jpg") ?>" alt="">
                    <h3 style="color:blue;">
                        Ferias De Buga
                    </h3>
                    <p>Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana..... </p>
                    <a href="<?php echo asset("home/eventos/det") ?>">
                        <button type="button" class="btn btn-primary">Ver Mas</button>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <img class="img-responsive" src="<?php echo asset("img/ferias.jpg") ?>" alt="">
                    <h3 style="color:blue;">
                        Ferias De Buga
                    </h3>
                    <p>Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana..... </p>
                    <a href="<?php echo asset("home/eventos/det") ?>">
                        <button type="button" class="btn btn-primary">Ver Mas</button>
                    </a>
                </div>
  

<script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    });
</script>

<?php include ("/../../Templates/Frontend/footer.php") ?>
<?php include ("/../../Templates/Frontend/foot.php") ?>