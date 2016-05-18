<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <div class="visitNav">
                    <div>
                        <h2 style="text-align: center;">Resultados De Tu Busqueda</h2>
                    </div>
                </div>
                <hr class="tagline-divider-cont">
            </div>
            
            <?php foreach ($resultados as $resultado): ?>
            <div class="col-md-4 text-center">
                <article class="articulo">    
                    <a>
                        <img class="img-responsive" src="<?php echo asset("$resultado->img_ruta") ?>" alt="">
                    </a>
                    <h5 class="titulo-evento">
                         <a href="#"><?php echo ((strlen($resultado->sit_nombre) > 15) ? substr(($resultado->sit_nombre), 0, 15) . " ..." : ($resultado->sit_nombre)) ?></a>
                    </h5>
                    <p><span class="articulofecha"></span><span class="articulo-autor"><a href="#"></a></span></p>
                    <p class="articulo-contenido">
                    </p>
                    <div class="contenedor-botones">
                         <a href="<?php echo url("home/sitios/det/" . $resultado->sit_id) ?>" class="btn btn-primary">Ver Mas</a>
                    </div>
                </article>
            </div>
             <?php endforeach ?>
            
            
            <div class="container">
                <div class="row">
            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?> 
            </div>
            </div>

