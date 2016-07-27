@include('Templates.Frontend.head')
@include('Templates.Frontend.header')

<div class="container">
    <div class="row">
        <div class="box">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="visitNav">
                    <div>
                        <h2 class="text-center ">Sitios</h2>
                    </div>
                </div>
                <hr class="tagline-divider-cont">
                <?php if (Session::has("Resultados")): ?>
                    <?php echo "<h3><center>".Session::pull("Resultados")."</center></h3>" ?>
                <?php endif ?>
            </div>
            <!-- /.row -->

            <!-- Projects Row -->
            <div class="row">

                <!-- Categoria 1-->
                <?php foreach ($resultados as $resultado): ?>
                    <div class="col-md-4 portfolio-item">
                        <a href="<?php echo url("home/sitios/det/" . $resultado->sit_id) ?>">
                            <img class="img-responsive" src="<?php echo asset("$resultado->img_ruta") ?>" alt="<?php echo ((strlen($resultado->sit_nombre) > 15) ? substr(($resultado->sit_nombre), 0, 15) . " ..." : ($resultado->sit_nombre)) ?>">
                        </a>
                        <h3>
                            <?php echo ((strlen($resultado->sit_nombre) > 15) ? substr(($resultado->sit_nombre), 0, 15) . " ..." : ($resultado->sit_nombre)) ?>
                        </h3>
                        <div class="contenedor-botones">
                            <a href="<?php echo url("home/sitios/det/" . $resultado->sit_id) ?>" class="btn btn-primary">Ver Mas</a>
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- /.row -->

                <!-- Projects Row -->
                <!-- Page Tittle -->
                <div class="col-lg-12">
                    <div class="visitNav">
                        <div>
                            <h2 class="text-center ">Eventos</h2>
                        </div>

                    </div>
                    <hr class="tagline-divider-cont">
                    <?php if (Session::has("Eventos")): ?>
                        <?php echo "<h3><center>".Session::pull("Eventos")."</center></h3>" ?>
                    <?php endif ?>
                </div>


                <?php foreach ($eventos as $evento): ?>
                    <div class="col-md-4 portfolio-item">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo asset("$evento->img_ruta") ?>" alt="">
                        </a>
                        <h3>
                            <?php echo ((strlen($evento->eve_nombre) > 15) ? substr(($evento->eve_nombre), 0, 15) . " ..." : ($evento->eve_nombre)) ?>
                        </h3>
                        <div class="contenedor-botones">
                            <a href="<?php echo url("home/eventos/det/" . $evento->eve_id) ?>" class="btn btn-primary">Ver Mas</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

            <!-- /.container -->
            @include('Templates.Frontend.footer')
            @include('Templates.Frontend.foot')
