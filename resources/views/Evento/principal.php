<?php include ("/../Templates/Frontend/head.php") ?>
<?php include ("/../Templates/Frontend/header.php") ?>
<!-- Comienzo Slides -->
<!-- Carousel Header -->

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
<!-- Final Slides -->
<hr class="hrWhat">
<div class="visitNav">
    <div>
        <h2 style="text-align: center;">Eventos</h2>
    </div> 
</div>
<hr>

<!-- Projects Row -->
<div class="container portImg"> 
    <div class="row ">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="<?php echo asset("img/ferias.jpg") ?>" alt="">
            </a>
            <h3 style="color:blue;">
              Ferias De Buga
            </h3>
            <p>Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana</p>
            <a href="<?php echo asset("Eventodetalle/detalle") ?>">
            <button type="button" class="btn btn-primary">Ver Mas</button>
            </a>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="<?php echo asset("img/ferias.jpg") ?>" alt="">
            </a>
            <h3 style="color:blue;">Ferias De Buga
            </h3>
            <p>Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana</p>
            <a href="<?php echo asset("Eventodetalle/detalle") ?>">
            <button type="button" class="btn btn-primary">Ver Mas</button>
            </a>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="<?php echo asset("img/ferias.jpg") ?>" alt="">
            </a>
            <h3 style="color:blue;">
                Ferias De Buga
            </h3>
            <p>Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana </p>
         <a href="<?php echo asset("Eventodetalle/detalle") ?>">
            <button type="button" class="btn btn-primary">Ver Mas</button>
         </a>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    

</div>

<!-- /.row -->
<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>

<?php include ("/../Templates/Frontend/footer.php") ?>
<?php include ("/../Templates/Frontend/foot.php") ?>