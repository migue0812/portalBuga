<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
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
            <div class="fill img-responsive" style="background-image:url('../..//..//..//public/img/Ferro.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 1</h2>
                <span>Descripcion</span>
            </div>
        </div>
        <div class="item">
            <!-- Imagen 2 -->
            <div class="fill" style="background-image:url('../..//..//..//public/img/Ferro.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
                <span>Descripcion</span>
            </div>
        </div>
        <div class="item">
            <!-- Imagen 3 -->
            <div class="fill" style="background-image:url('../..//..//..//public/img/Ferro.jpg');"></div>
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
        <h2 style="text-align: center;">Mas Visitados</h2>
    </div>
</div>
<hr>

<!-- Projects Row -->
<div class="container portImg">
    <div class="row ">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="<?php echo asset("img/Holmes.png") ?>" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>

    </div>
    <?php include ("/../../Templates/Frontend/whatToDo.php") ?>

</div>

<!-- /.row -->
<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>

<?php include ("/../../Templates/Frontend/footer.php") ?>
<?php include ("/../../Templates/Frontend/foot.php") ?>