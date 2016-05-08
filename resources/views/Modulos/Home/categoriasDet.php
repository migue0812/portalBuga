
<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

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
                            <img class="img-responsive" src="<?php echo asset("img/Deportes_1.jpg") ?>" alt="">     
                        </a>
                    </div>

                    <div class="col-sm-12  portfolio-item">
                        <h2 class="size marg">Deportes</h2>
                        <p> La ciudad de Guadalajara de Buga, cuenta con grandes escenarios deportivos, los cuales son utilizados 
                            también por los colegios públicos del municipio y todo con el propósito de que nuestros niños y jóvenes se 
                            beneficien del deporte y contribuyan al desarrollo social de la ciudad. </p>
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
                        <h2 class="text-center size">¿Que Deporte Practicar?</h2>
                    </div>
                </div>
                <hr class="tagline-divider-cont">
            </div>
            <div class="portafolio">
                <div class="col-sm-4 portfolio-item">
                    <img class="img-responsive tam thumbnail" src="<?php echo asset("img/BMX.jpg") ?>" alt="">
                    <h3 style="color:blue;">
                        BMX
                    </h3>
                    <p class="text-justify">La ciudad de Guadalajara de Buga, cuenta con grandes escenarios deportivos, los cuales son utilizados 
                        también por los colegios públicos del municipio y todo con el propósito de que nuestros niños y jóvenes se 
                        beneficien del deporte y contribuyan al desarrollo social de la ciudad. </p>
                    <a href="<?php echo asset("home/categorias/det") ?>">
                        <button type="button" class="btn btn-primary">Ver Mas</button>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <img class="img-responsive tam thumbnail" src="<?php echo asset("img/futbol.jpg") ?>" alt="">
                    <h3 style="color:blue;">
                        Futbol
                    </h3>
                    <p class="text-justify">La ciudad de Guadalajara de Buga, cuenta con grandes escenarios deportivos, los cuales son utilizados 
                        también por los colegios públicos del municipio y todo con el propósito de que nuestros niños y jóvenes se 
                        beneficien del deporte y contribuyan al desarrollo social de la ciudad. </p>
                    <a href="<?php echo asset("home/categorias/det") ?>">
                        <button type="button" class="btn btn-primary">Ver Mas</button>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <img class="img-responsive tam thumbnail" src="<?php echo asset("img/patinaje.jpg") ?>" alt="">
                    <h3 style="color:blue;">
                        Patinaje
                    </h3>
                    <p class="text-justify">La ciudad de Guadalajara de Buga, cuenta con grandes escenarios deportivos, los cuales son utilizados 
                        también por los colegios públicos del municipio y todo con el propósito de que nuestros niños y jóvenes se 
                        beneficien del deporte y contribuyan al desarrollo social de la ciudad. </p>
                    <a href="<?php echo asset("home/categorias/det") ?>">
                        <button type="button" class="btn btn-primary">Ver Mas</button>
                    </a>
                </div>
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

        <div class="fb-comments" data-href="https://www.facebook.com/groups/860979787324031/?fref=ts" data-numposts="5"></div>

        <!-- /.row -->
        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 3000 //changes the speed
            });
        </script>

        <?php include ("/../../Templates/Frontend/footer.php") ?>
        <?php include ("/../../Templates/Frontend/foot.php") ?>
