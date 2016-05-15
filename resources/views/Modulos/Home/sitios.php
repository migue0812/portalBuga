<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<?php
                    foreach ($sitios as $sitio):
                        ?>
<div class="container">
    <div class="row">
        <div class="box">
            <div class="visitNav">
                <div id="alz"><h3>SITIOS TURISTICOS DE BUGA</h3></div>
            </div>
           
            <hr class="tagline-divider-cont">
            <div class="container portImg">
                <div class="row ">
                    
                        <div class="col-md-6 portfolio-item">
                            <a href="<?php echo url("home/sitios/det") ?>">
                                <img style="float: right; border-radius: 20px;"  class="img-responsive" src="<?php echo asset("$sitio->img_ruta") ?>" alt="">
                            </a>

                        </div>

                        <div class="col-md-5 portfolio-item">
                            <h2 style="text-align: center"><?php echo ($sitio->sit_nombre) ?></h2>
                            <hr class="tagline-divider-cont">
                            <p class="text-justify"><?php echo ((strlen($sitio->sit_descripcion) > 200) ? substr(($sitio->sit_descripcion), 0, 200) . " ..." : ($sitio->sit_descripcion)) ?></p>
                            <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Ver mas"class="icon-plus fa-fw"></b></a>
                            <a href="<?php echo url("itinerario/sitios") ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
endforeach
?>



<div class="container">
    <div class="row">
        <div class="box">
            <div class="visitNav">
                <div id="alz"><h3>SITIOS TURISTICOS DE BUGA</h3></div>
            </div>
            <hr class="tagline-divider-cont">
            <?php
                    foreach ($sitios2 as $sitio):
                        ?>
            <div class="col-md-4 portfolio-item">
                <div id="tituloalz"><h2><?php echo ($sitio->sit_nombre) ?></h2></div>
                <a href="#">
                    <img class="img-responsive" src="<?php echo asset("$sitio->img_ruta") ?>">
                </a>        
                <p>><?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 100) . " ..." : ($sitio->sit_descripcion)) ?></p>
                <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Ver mas"class="icon-plus fa-fw"></b></a>
                <a href="<?php echo url("itinerario/sitios") ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
            </div>  
   <?php
endforeach
?>
 </div>
    </div>
    </div>           
                
     <div class="container">
    <div class="row">
        <div class="box">
            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?>
</div>
    </div>
    </div>