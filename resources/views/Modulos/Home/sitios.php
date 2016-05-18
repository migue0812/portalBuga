<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="visitNav">
                    <h2 style="text-align: center">SITIOS TURISTICOS DE BUGA</h2>
                </div>

                <hr class="tagline-divider-cont">
                <?php foreach ($sitios as $sitio):?>
                <div class="container portImg">
                    <div class="row ">

                        <div class="col-md-6 portfolio-item">
                            <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>">
                                <img style="float: right; border-radius: 20px;"  class="img-responsive" src="<?php echo asset("$sitio->img_ruta") ?>" alt="">
                            </a>

                        </div>

                        <div class="col-md-5 portfolio-item">
                            <h2 style="text-align: center"><?php echo ($sitio->sit_nombre) ?></h2>
                            <hr class="tagline-divider-cont">
                            <p class="text-justify"><?php echo ((strlen($sitio->sit_descripcion) > 200) ? substr(($sitio->sit_descripcion), 0, 200) . " ..." : ($sitio->sit_descripcion)) ?></p>
                            <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Ver mas"class="icon-plus fa-fw"></b></a>
                            <?php if (Session::has("usuarioLogueado")): ?>
                                <a href="<?php echo url("itinerario/sitio/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <br>
                <?php
            endforeach
            ?>
 
                
            <div class="visitNav">
            </div>
                <h2 style="text-align: center">MAS SITIOS TURISTICOS</h2>
            <hr class="tagline-divider-cont">
            <?php
            foreach ($sitios2 as $sitio):
                ?>
                <div class="col-md-4 portfolio-item">
                    <div id="tituloalz"><h2><?php echo ($sitio->sit_nombre) ?></h2></div>
                    <img class="img-responsive" src="<?php echo asset("$sitio->img_ruta") ?>">
                    <p><?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 100) . " ..." : ($sitio->sit_descripcion)) ?></p>
                    <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Ver mas"class="icon-plus fa-fw"></b></a>
                    <?php if (Session::has("usuarioLogueado")): ?>
                        <a href="<?php echo url("itinerario/sitio/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
                    <?php endif ?>
                </div>  
            
                <?php
            endforeach
                ?>
            <!-- ESTE (DIV) SITIO ES QUEMADO  -->
           <div class="col-md-4 portfolio-item">
                    <div id="tituloalz"><h2><?php echo ($sitio->sit_nombre) ?></h2></div>
                    <img class="img-responsive" src="<?php echo asset("$sitio->img_ruta") ?>">
                    <p><?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 100) . " ..." : ($sitio->sit_descripcion)) ?></p>
                    <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Ver mas"class="icon-plus fa-fw"></b></a>
                    <?php if (Session::has("usuarioLogueado")): ?>
                        <a href="<?php echo url("itinerario/sitio/" . $sitio->sit_id) ?>" class="btn btn-primary"><b title="Itinerario" class="icon-direction fa-fw"></b></a>
                    <?php endif ?>
                </div>  
                

<?php include ("/../../Templates/Frontend/footer.php") ?>
<?php include ("/../../Templates/Frontend/foot.php") ?>
            