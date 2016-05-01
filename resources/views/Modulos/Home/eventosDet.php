<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<!-- Comienzo Slides -->
<!-- Carousel Header -->

<!-- Final Slides -->
<div class="container">
    <div class="row">
        <div class="box">
            <div class="visitNav">
                <div>
                    <h2 style="text-align: center;">Detalles del Eventos</h2>
                </div>
            </div>
            <hr class="tagline-divider-cont">

            <!-- Projects Row -->
            <div class="container portImg">
                <div class="row ">
                    <div class="col-md-6 portfolio-item">
                        <a href="se devuleve al index">
                            <img class="img-responsive" src="<?php echo asset("img/ferias.jpg") ?>" alt="">

                           
                        </a>
                    </div>
                    <div class="col-md-1 portfolio-item">
                        <h4 class=" icon-home"><b>:</b></h4>
                        <p>Coliseo de ferias</p>
                    </div>
                    <div class="col-md-2 portfolio-item">
                        <h4 class="icon-location"><b>:</b></h4>
                        <p>Carrera 8 con calle 21</p>
                    </div>
                    <div class="col-md-2 portfolio-item">
                        <h4 class=" icon-calendar"><b>:</b></h4><p>Del 15 de julio hasta el 20 de julio</p>
                    </div>
                    <div class="col-md-5 col-sm-11 portfolio-item">
                        <h2 style="margin-top: 60px;">Ferias De Buga</h2>
                        <p class="text-justify">Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana.. Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en e Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Ale
                            Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Al </p>
                    </div>
       
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
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
                        </div>
                    </div>
                </div>
</div>
                    <!-- /.row -->
                    <!-- Script to Activate the Carousel -->
                    <script>
                        $('.carousel').carousel({
                            interval: 3000 //changes the speed
                        });
                    </script>

                    <?php include ("/../../Templates/Frontend/footer.php") ?>
                    <?php include ("/../../Templates/Frontend/foot.php") ?>