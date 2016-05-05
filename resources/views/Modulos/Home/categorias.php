<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<!-- Pages Content -->
<div class="container">
    <div class="row">
        <div class="box">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="visitNav">
                    <div>
                        <h2 class="text-center ">Categorias</h2>
                    </div>
                </div>
                <hr class="tagline-divider-cont">
            </div>
            <!-- /.row -->

            <!-- Projects Row -->
            <div class="row">
                <!-- Categoria 1-->

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="<?php echo asset("img/fondo1_1.jpg") ?>" alt="">
                    </a>
                    <h3>
                        <a href="#">Cultura y tradición</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>

                <!-- Categoria 2-->
                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="<?php echo asset("img/Deportes_1.jpg") ?>" alt="">
                    </a>
                    <h3>
                        <a href="#">Deportes</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>

                <!-- Categoria 3-->
                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="<?php echo asset("img/natural_1.jpg") ?>" alt="">
                    </a>
                    <h3>
                        <a href="#">Ecoturistico</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects Row -->
            <div class="row">
                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="<?php echo asset("img/iglesias_1.jpg") ?>" alt="">
                    </a>
                    <h3>
                        <a href="#">Religioso</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="<?php echo asset("img/historico_1.jpg") ?>" alt="">
                    </a>
                    <h3>
                        <a href="#">Historico</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="<?php echo asset("img/piscinas_1.jpg") ?>" alt="">
                    </a>
                    <h3>
                        <a href="#">Entretenimiento</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
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
            </div>

            <!-- /.container -->

            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?>