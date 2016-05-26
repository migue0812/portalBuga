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
                <h1 class="brand-name" style="">Guadalajara De Buga</h1>
                <hr class="tagline-divider">
                <div>

                    <div class="tituloWelcome" style="">Una de las mejores ciudades turisticas!</div>

                    <p>En el Centro del Valle del Cauca, específicamente en la parte media de la Cordillera Central, 
                      fue fundado en 1573, el municipio de Guadalajara de Buga. 
                      “La ciudad Señora” como también se le denomina, 
                      posee un patrimonio arquitectónico e histórico que cuenta con diferentes bienes de interés cultural,
                      entre estos, La Basílica del Señor de los Milagros la cual recibe y acoge a visitantes de todo el mundo.
</p>

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
                    <div class="hoverSitio col-sm-4 text-center">
                        <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>">
                          <img class="img img-responsive thumbnail tm" src="<?php echo asset("$sitio->img_ruta") ?>" alt="">
                        </a>
                        <div class="textHover">
                            <button id="botonHidden" type="submit">Ver Mas</button>
                            
                        </div> 
                        <h3 style="font-family: Helvetica Neue;"><?php echo ($sitio->sit_nombre) ?></h3>
                    </div>
                   
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
                        <p>Rodeada por diferentes atractivos turísticos, 
                          dentro de ellos el más importante de esta ciudad La Basílica del Señor de los Milagros, 
                          la cual a bendecido a millones de turistas nacionales y extranjeros. 
                          Ubicada en el centro de la ciudad de Buga. 
                          Por su trayectoria histórica y milagrosa la Basílica es el lugar mas visitado en el Valle del Cauca y uno de los centros religiosos por excelencia de Colombia.<br>
                          Ven y disfruta de la mejor Gastronomía Vallecaucana, Restaurantes, Fincas Campestres, 
                          Hoteles, Balnearios y demás Destinos Turísticos para disfrutar en Familia.</p>
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
                        <h3>Diverción?
                            <small>La mejor diverción</small>
                        </h3>
                        <p>Buscas un lugar para divertirte?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 desarrollo">
                <div class="visitNav">
                    <div>
                        <h2 style="text-align: center;">Desarrollo</h2>
                    </div>
                </div>
                <hr class="tagline-divider-cont">
            </div>
            <div class="line"></div>
            <!-- Page Content -->
            <div class="container text-center actividades">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/senaLog.png") ?>" alt="Descansar?">
                        <h3 class="text-center">
                        </h3>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/histoBuga.png") ?>" alt="Descansar?">
                        <h3 class="text-center">
                        </h3>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/bugaLog.png") ?>" alt="Comer?">
                        <h3 class="text-center">
                        </h3>
                    </div>
                </div>
            </div>

            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?>