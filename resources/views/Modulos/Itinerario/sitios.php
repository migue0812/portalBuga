<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<div class="container">
    <div class="row">
        <div class="box">
            <div id="wrapper">
                <!-- Sidebar -->
                <div class="row">
                    <div class="itineraio col-lg-4 col-xs-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i> Lista Pendientes
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="<?php echo url("itinerario") ?>" class="list-group-item">
                                        <i class="fa fa-map-marker fa-fw"></i> Sitios
                                        <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                        </span>
                                    </a>
                                    <a href="<?php echo url("itinerario/evento") ?>" class="list-group-item">
                                        <i class="fa fa-puzzle-piece fa-fw"></i> Eventos
                                        <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                        </span>
                                    </a>
                                </div>
                                <!-- /.list-group -->
                                <a href="<?php echo url("itinerario/todos") ?>" class="btn btn-default btn-block">Ver Todos</a>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                    <div id="tablaMenu" class="col-lg-8 col-xs-12 col-sm-12">
                        <article id="tablaMenu">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-map-marker fa-fw"></i> Sitios Elegidos
                                </div>
                                <?php if (Session::has("sitio")):?>
    <div class="alert alert-success alert-dismissible center-block" role="alert"><?php echo Session::get("sitio") ?></div>
                <?php endif ?>
    <?php if (Session::has("sitioExistente")):?>
    <div class="alert alert-danger alert-dismissible center-block" role="alert"><?php echo Session::get("sitioExistente") ?></div>
                <?php endif ?>
     <?php if (Session::has("sitioVisitado")):?>
    <div class="alert alert-info alert-dismissible center-block" role="alert"><?php echo Session::get("sitioVisitado") ?></div>
                <?php endif ?>
     <?php if (Session::has("sitioNoVisitado")):?>
    <div class="alert alert-warning alert-dismissible center-block" role="alert"><?php echo Session::get("sitioNoVisitado") ?></div>
                <?php endif ?>
    <?php if (Session::has("sitioEliminado")):?>
    <div class="alert alert-danger alert-dismissible center-block" role="alert"><?php echo Session::get("sitioEliminado") ?></div>
                <?php endif ?>

                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sitio</th>
                                                    <th>Visitado</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <?php
                            foreach ($sitios as $sitio):
                                ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $sitio->sit_nombre ?></td>
                                                    <td><?php echo $sitio->iti_visitado ?></td>
                                                    <td>
                                                        <a title="Ver Sitio" href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>" class="btn btn-xs btn-primary"><i class="fa fa-eye fa-fw"></i></a>
                                                        <?php if ($sitio->iti_visitado === 'Si'): ?>

                                                        <a title="No Visitado" href="<?php echo url("itinerario/sitionovisitado/" . $sitio->sit_id) ?>" class="btn btn-xs btn-success"><i class="fa fa-rocket fa-fw"></i></a>
                                                        <?php else: ?>
                                                        <a title="Visitado" href="<?php echo url("itinerario/sitiovisitado/" . $sitio->sit_id) ?>" class="btn btn-xs btn-warning"><i class="fa fa-rocket fa-fw"></i></a>
                                                        <?php endif ?>
                                                        <a title="Eliminar" href="<?php echo url("itinerario/sitioeliminar/" . $sitio->sit_id) ?>" class="btn btn-xs btn-danger"><i class="fa  fa-ban fa-fw"></i></a></td>
                                                </tr>
                                                
                                            </tbody>
                                                 <?php
                                 endforeach 
                                ?>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <!-- Menu Toggle Script -->

            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?>