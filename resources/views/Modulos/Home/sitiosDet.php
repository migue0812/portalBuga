<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="visitNav">
                <div>
                    <h2 style="text-align: center;">Detalles del Sitio</h2>
                </div>
            </div>
            <hr class="tagline-divider-cont">

            <!-- Projects Row -->
            <div class="container portImg">
                <div class="row ">
                    <div class="col-md-6 portfolio-item">
                        <a href="">
                            <img class="img-responsive" src="<?php echo asset("$sitDetalle->img_ruta") ?>" alt="">


                        </a>
                    </div>
                    <div class="col-md-2 portfolio-item">
                        <h4 class="icon-location"><b>:</b></h4>
                        <p><?php echo ($sitDetalle->sit_direccion) ?></p>
                    </div>
                    <div class="col-md-2 portfolio-item">
                        <h4 class=" icon-phone"><b>:</b></h4><p><?php echo ($sitDetalle->sit_telefono) ?></p>
                    </div>
                    <div class="col-md-5 col-sm-11 portfolio-item">
                        <h2 style="margin-top: 60px;"><?php echo ($sitDetalle->sit_nombre) ?></h2>
                        <p class="text-justify"><?php echo ($sitDetalle->sit_descripcion) ?></p>
                    </div>
                </div>
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
                <div class="col-md-5 col-sm-11 portfolio-item">
                    <p><a data-href='javascript:void(0);' expr:onclick='&quot;window.open(\&quot;http://www.facebook.com/sharer.php?u=&quot; + data:post.url + &quot;\&quot;,\&quot;gplusshare\&quot;,\&quot;toolbar=0,status=0,width=548,height=325\&quot;);&quot;' rel='nofollow'><img class='botoni' height='20' src='http://1.bp.blogspot.com/-ru_KTYmbf2w/UhwCP96ijsI/AAAAAAAAAgg/iAY-VBzvg_4/s320/facebook.png'width='15'/></a><strong> Dale Me Gusta a Nuestro Facebook:</strong><br></p>
                    <p><a data-href='javascript:void(0);' expr:onclick='&quot;window.open(\&quot;http://twitter.com/home?status=&quot; + data:post.url + &quot;\&quot;,\&quot;gplusshare\&quot;,\&quot;toolbar=0,status=0,width=548,height=325\&quot;);&quot;' rel='nofollow'><img class='botoni' height='20' src='http://2.bp.blogspot.com/-VUCTk734Vpk/UhwCQVxCH8I/AAAAAAAAAg0/h1JezQbBmX0/s1600/twitter.png' width='15'/></a><strong> Síguenos en Nuestro Twitter: </strong><br></p>
                    <p><a data-href='javascript:void(0);' expr:onclick='&quot;window.open(\&quot;https://plus.google.com/share?url=&quot; + data:post.url + &quot;\&quot;,\&quot;gplusshare\&quot;,\&quot;toolbar=0,status=0,width=548,height=325\&quot;);&quot;' rel='nofollow'><img class='botoni' height='20' src='http://1.bp.blogspot.com/-KSoMecJPQRs/UhwFcTpgz0I/AAAAAAAAAhI/-VLTVUCxb6o/s1600/Google%252B%2Balt.png'width='15'/></a><strong> Encuentranos tambien en Google: </strong> <br></p>
                </div>


            </div>


            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?>