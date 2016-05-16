<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<div class="container">
    <div class="row">
        <div class="box">
            <div class=" col-lg-12 text-center">
                <header id="myCarousel" class="carou carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for Slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <!-- Set the first background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../img/vintagecom.jpg');"></div>
                            <div class="carousel-caption">
                                <h2>Caption 1</h2>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Set the second background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../img/Ferro.jpg');"></div>
                            <div class="carousel-caption">
                                <h2>Caption 2</h2>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Set the third background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../img/Basilica.jpg');"></div>
                            <div class="carousel-caption">
                                <h2>Caption 3</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="icon-next"></span>
                    </a>

                </header>
                <h2 class="brand-before">

                </h2>
                <h1 class="brand-name" style="text-shadow: 2px 1px 2px rgba(0,0,0,0.5);text-align: center;">Guadalajara De Buga</h1>
                <hr class="tagline-divider">
                <div>

                    <div class="tituloWelcome" style="text-align: center;">Una de las mejores ciudades turisticas!</div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="visitNav">
                    <div>
                        <h2 style="text-align: center;">Más Vistos</h2>
                    </div>
                </div>
                <hr class="tagline-divider-cont">
            </div>
            <div class="portafolio row">
                <?php
                    foreach ($sitios as $sitio):
                        ?>
                <div class="col-sm-4 text-center">
                    <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>"><img class="img-responsive" src="<?php echo asset("$sitio->img_ruta") ?>" alt=""></a>
                    <h3><?php echo ($sitio->sit_nombre) ?></h3>
                </div>
                <div class=""></div>
                <?php endforeach ?>
            </div>

            <div class="queHacer">
                <div>
                    <h2 style="text-align: center;">Que Hacer</h2>
                </div>
            </div>
            <div class="line"></div>
            <!-- Page Content -->
            <div class="container">

                <!-- Introduction Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="visit">Visitanos
                            <small>Los Mejores Lugares Para Ti !</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
                    </div>
                </div>

                <!-- Team Members Row -->

                <div class="row actividades">

                    <div class="col-lg-4 col-sm-4 text-center">
                        <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/dormir.png") ?>" alt="Descansar?">
                        <h3>Donde Dormir?
                            <small>Los mejores lugares</small>
                        </h3>
                        <p>Buscas un lugar para descarsar? </p>
                    </div>
                    <div class="col-lg-4 col-sm-4 text-center">
                        <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/comer.png") ?>" alt="Comer?">
                        <h3>Donde Comer?
                            <small>La mejor comida</small>
                        </h3>
                        <p>Buscas un lugar para comer?</p>
                    </div>
                    <div class="col-lg-4 col-sm-4 text-center">
                        <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/diversion.png") ?>" alt="">
                        <h3>John Smith
                            <small>La mejor diverción</small>
                        </h3>
                        <p>Buscas un lugar para divertirte?</p>
                    </div>
                </div>
            </div>

            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?>