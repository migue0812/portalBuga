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
                            <h3>Va facebook</h3>
                            <h3>Va google +</h3>
                            <div class="stars">
                                <div class="ec-stars-wrapper col-lg-4">
                                    <spam  class="tittlePunt">Atención :</spam>
                                    <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                                    <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                                    <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                                    <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                                    <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                                </div>
                                <noscript>Necesitas tener habilitado javascript para poder votar</noscript>
                                <div class="ec-stars-wrapper col-lg-4">
                                    <spam  class="tittlePunt">Precio :</spam>
                                    <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                                    <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                                    <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                                    <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                                    <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                                </div>
                                <noscript>Necesitas tener habilitado javascript para poder votar</noscript>
                                <div class="ec-stars-wrapper col-lg-4">
                                    <spam  class="tittlePunt">Calidad :</spam>
                                    <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                                    <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                                    <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                                    <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                                    <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                                </div>
                                <noscript>Necesitas tener habilitado javascript para poder votar</noscript>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 portfolio-item">
                        <h4 style="color:blue;"><b>Lugar:</b></h4>
                        <p>Coliseo de ferias</p>
                    </div>
                    <div class="col-md-2 portfolio-item">
                        <h4 style="color:blue;"><b>Direccion:</b></h4>
                        <p>Carrera 8 con calle 21</p>
                    </div>
                    <div class="col-md-2 portfolio-item">
                        <h4 style="color:blue;"><b>Duracion:</b></h4><p>Del 15 de julio hasta el 20 de julio</p>
                    </div>
                    <div class="col-md-6 portfolio-item">
                        <h3 style="color:blue;"><b>Ferias De Buga</b></h3>
                        <p class="text-justify" style="clear: right;">Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en el mundo de la música cristiana.. Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Alex Campos, reconocido en e Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Ale
                            Los eventos inician el jueves 9 de julio con un gran concierto espiritual con el artista ganador del premio Grammy Al</p>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Projects Row -->

                <!-- Comentarios Facebook -->
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