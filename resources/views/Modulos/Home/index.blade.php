@include('Templates.Frontend.head')
@include('Templates.Frontend.header')
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
                            <div class="fill" style="background-image:url('../img/Basilica.jpg');"></div>
                            <div class="carousel-caption">
                                <p class="" style="color: #FFF; font: 180% sans-serif;">Basilica Del Señor De Los Milagros </p>
                                <p>La palabra Basílica significa “Casa donde vive el Rey”. La iglesia católica le concede el título de “Basílicas” a unos cuantos templos muy celebres de Roma. </p>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Set the second background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../img/bugio.jpg');"></div>
                            <div class="carousel-caption">
                                <p class=""style="color: #FFF; font: 180% sans-serif">Estacion Del Ferrocarril</p>
                                <p>La Estación del Ferrocarril, espectacular conjunto arquitectónico, declarado Bien de Interés Cultural (BIC) de la Nación por el Ministerio de Cultura. Posee una arquitectura colonial, buscando uniformidad en cada uno de los elementos y detalles que la componen.</p>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Set the third background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../img/vintagecom.jpg');"></div>
                            <div class="carousel-caption">
                                <p style="color: #FFF; font: 180% sans-serif">Buga</p>
                                <p>Cuenta la leyenda que en 1550 a las manos de una indígena que lavaba ropa en el río Guadalajara llegó un pequeño Cristo, traído por las aguas. Dios recompensaba así un acto caritativo de la mujer hacia un vecino. Tras ser puesta en un altar, la imagen comenzó a crecer y la gente a venerarla.</p>
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
                    <a href="<?php echo url("home/historia") ?>" class="info">
                        <button class="text-center">Ver mas</button></a>
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
                        <h3 style="font-family: Helvetica Neue;"><?php echo ((strlen($sitio->sit_nombre) > 30) ? substr(($sitio->sit_nombre), 0, 30) . " ..." : ($sitio->sit_nombre)) ?></h3>
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
                    <div class="col-lg-11 col-sm-11 text-center" style="text-align: justify;">
                        <h3 class="visit">Visitanos
                            <small>Los Mejores Lugares Para Ti !</small>
                        </h3>
                        <p>Rodeada por diferentes atractivos turísticos,dentro de ellos el más importante de esta ciudad 
                            La Basílica del Señor de los Milagros,
                            la cual a bendecido a millones de turistas nacionales y extranjeros.
                            Ubicada en el centro de la ciudad de Buga.
                            Por su trayectoria histórica y milagrosa la Basílica es el lugar mas visitado en el Valle del Cauca 
                            y uno de los centros religiosos por excelencia de Colombia.
                            Ven y disfruta de la mejor Gastronomía Vallecaucana, Restaurantes, Fincas Campestres,
                            Hoteles, Balnearios y demás Destinos Turísticos para disfrutar en Familia.
                        </p>
                    </div>
                </div>

                <!-- Team Members Row -->

                <div class="row actividades">

                    <div class="col-lg-4 col-sm-4 text-center">
                        <a href="<?php echo url("home/categorias/det/7") ?>" class="info">
                            <diV class="socialicons">
                                <img style="width: 100px; height: 90px" class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/dormir.png") ?>" alt="Descansar?"></a>
                            </div>
                            <h3>Donde Dormir?
                                <small>La mejor guia Hotelera</small>
                            </h3>
                            <p>Dejate consentir</p>
                    </div>
                    <div class="col-lg-4 col-sm-4 text-center">
                        <a href="<?php echo url("home/categorias/det/8") ?>" class="info">
                            <div class="socialicons">
                                <img style="width: 100px; height: 100px" class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/comer.png") ?>" alt="Comer?"></a>
                            </div>
                            <h3>Donde Comer?
                                <small>Los mejores Restaurantes</small>
                            </h3>
                            <p>Deleita tu paladar</p>
                    </div>
                    <div class="col-lg-4 col-sm-4 text-center">
                        <a href="<?php echo url("home/hospitales") ?>" class="info">
                            <div class="socialicons">
                                <img style="width: 110px; height: 110px" class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/diversion.png") ?>" alt=""></a>
                            </div>
                            <h3>Emergencias?
                                <small>Clinicas las 24 horas</small>
                            </h3>
                            <p>Las mejores clinicas de Buga</p>
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

            <!-- Page Content -->
            <div class="container text-center actividades">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <a href="https://www.facebook.com/BienestarCDTI/?fref=ts" title="CDTI SENA" target="_blank" class="info">
                            <div class="socialicons">
                                <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/senaLog.png") ?>" alt="Descansar?">
                            </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a href="http://www.guadalajaradebuga-valle.gov.co/index.shtml" title="Alcaldia" target="_blank" class="info">
                            <div class="socialicons">
                                <img style="width: 150px; height: 90px" class="queHacerIcon  img-responsive img-center" src="<?php echo asset("img/bugaLog.png") ?>">
                            </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-12 desarrollo">
                <div class="visitNav">
                    <div>
                        <h2 style="text-align: center;">Agencias De Viajes</h2>
                    </div>
                </div>
                <hr class="tagline-divider-cont">
            </div>

            <!-- Page Content -->
            <div class="container text-center actividades">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                       <a href="<?php echo url("home/agencias") ?>" class="info">
                            <div class="socialicons">
                                <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/explora.png") ?>" alt="Descansar?">
                            </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a href="<?php echo url("home/agencias") ?>" class="info">
                            <div class="socialicons">
                                <img class="queHacerIcon  img-responsive img-center" src="<?php echo asset("img/nuestraTierra.png") ?>">
                            </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a href="<?php echo url("home/agencias") ?>" class="info">
                            <div class="socialicons">
                                <img class="queHacerIcon img-responsive img-center" src="<?php echo asset("img/turismundo.png") ?>" alt="Comer?">
                            </div>
                    </div>
                </div>
            </div>


            @include('Templates.Frontend.footer')
            @include('Templates.Frontend.foot')