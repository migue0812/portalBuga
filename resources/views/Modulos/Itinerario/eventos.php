<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<div class="container">
    <div class="row">
        <div class="box">
            <div id="wrapper">

                <!-- Sidebar -->
                <div class="row">
                    <div class="itineraio col-lg-2 col-xs-12 col-sm-3">
                        <aside class="" >
                            <div class="list-group">
                                <a href="<?php echo url("itinerario/sitios") ?>" class="list-group-item menu-eventos">Sitios</a>
                                <a href="<?php echo url("itinerario/eventos") ?>" class="list-group-item menu-eventos">Eventos</a>

                            </div>
                        </aside>
                    </div>
                    <div id="tablaMenu" class="col-lg-8 col-xs-12 col-sm-9">

                        <article id="tablaMenu">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="success">
                                            <th>Evento</th>
                                            <th>Fecha</th>
                                            <th>Opciones</th>
                                        </tr>
                                        <tr>
                                            <td>Nombre</td>
                                            <td><a>Fecha</a></td>
                                            <td>
                                                <a title="Ver Evento" href="" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-eye-open"></i></a>
                                                <a title="Eliminar" href="" class="btn btn-xs btn-danger"><i class="icon-cross"></i></a>
                                            </td>
                                        </tr>

                                    </thead>
                                </table>
                            </div>
                        </article>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Menu Toggle Script -->

<?php include ("/../../Templates/Frontend/footer.php") ?>
<?php include ("/../../Templates/Frontend/foot.php") ?>