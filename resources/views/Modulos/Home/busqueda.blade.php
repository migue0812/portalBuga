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
            </div>
            <!-- /.row -->

            <!-- Projects Row -->
            <div class="row">
                <!-- Categoria 1-->
                <?php foreach ($resultados as $resultado): ?>
                    <div class="col-md-4 portfolio-item">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo asset("$resultado->img_ruta") ?>" alt="<?php echo ((strlen($resultado->sit_nombre) > 15) ? substr(($resultado->sit_nombre), 0, 15) . " ..." : ($resultado->sit_nombre)) ?>">
                        </a>
                        <h3>
                            <a href="#" ><?php echo ((strlen($resultado->sit_nombre) > 15) ? substr(($resultado->sit_nombre), 0, 15) . " ..." : ($resultado->sit_nombre)) ?></a>
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
                </div>
                <?php foreach ($eventos as $evento): ?>
                    <div class="col-md-4 portfolio-item">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo asset("$evento->img_ruta") ?>" alt="">
                        </a>
                        <h3>
                            <a href="#" ><?php echo ((strlen($resultado->sit_nombre) > 15) ? substr(($resultado->sit_nombre), 0, 15) . " ..." : ($resultado->sit_nombre)) ?></a>
                        </h3>
                        <div class="contenedor-botones">
                            <a href="<?php echo url("home/evento/det/" . $evento->eve_id) ?>" class="btn btn-primary">Ver Mas</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

            <!-- /.container -->
            @include('Templates.Frontend.footer')
            @include('Templates.Frontend.foot')
