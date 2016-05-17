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
                
                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i> Encuentranos en Facebook Como: <br>
                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i> Siguenos en Twitter: <br>
                <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i> Tambien estamos En Google Plus: <br>           

                <div class="stars">
 <div class="ec-stars-wrapper col-lg-10">
                                        <spam  class="tittlePunt">Atención :</spam>
                                        <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                                        <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                                        <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                                        <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                                        <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                                    </div>
            </div>

<!-- efecto imgs -->
            <h2 style="text-align: center;">Imagenes Del Sitio</h2>
            <hr class="tagline-divider-cont">
<div class="col-md-4 col-sm-6 evento-item">
            <a href="#eventoModal1" class="evento-link" data-toggle="modal">
                <div class="evento-hover">
                    <div class="evento-hover-content">                        
                    </div>
                </div>
                <img src="<?php echo asset("$sitDetalle->img_ruta") ?>" class="img-responsive" alt="">
            </a>            
        </div>

<div class="col-md-4 col-sm-6 evento-item">
            <a href="#eventoModal1" class="evento-link" data-toggle="modal">
                <div class="evento-hover">
                    <div class="evento-hover-content">
                        
                    </div>
                </div>
                <img src="<?php echo asset("$sitDetalle->img_ruta") ?>" class="img-responsive" alt="">
            </a>            
        </div>

<div class="col-md-4 col-sm-6 evento-item">
            <a href="#eventoModal1" class="evento-link" data-toggle="modal">
                <div class="evento-hover">
                    <div class="evento-hover-content">
                       
                    </div>
                </div>
                <img src="<?php echo asset("$sitDetalle->img_ruta") ?>" class="img-responsive" alt="">
            </a>            
        </div>

<!-- efecto IMG GRANDE(modal1) -->
<div class="portfolio-modal modal fade" id="eventoModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="box">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2 style="margin-top: 20px; text-align: center"><?php echo ($sitDetalle->sit_nombre) ?></h2>
                        
                        <img class="img-responsive img-centered" src="<?php echo asset("$sitDetalle->img_ruta") ?>" class="img-responsive" alt="">
                        
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ("/../../Templates/Frontend/footer.php") ?>
<?php include ("/../../Templates/Frontend/foot.php") ?>