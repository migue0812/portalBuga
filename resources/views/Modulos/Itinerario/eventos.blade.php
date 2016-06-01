@include('Templates.Frontend.head')
@include('Templates.Frontend.header')
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
                    <span class="pull-right text-muted small"><em></em>
                    </span>
                  </a>
                  <a href="<?php echo url("itinerario/evento") ?>" class="list-group-item">
                    <i class="fa fa-puzzle-piece fa-fw"></i> Eventos
                    <span class="pull-right text-muted small"><em></em>
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
                  <i class="fa fa-puzzle-piece fa-fw"></i> Eventos Elegidos
                </div>
                <?php if (Session::has("evento")): ?>
                  <div class="alert alert-success alert-dismissible center-block" role="alert"><?php echo Session::get("evento") ?></div>
                <?php endif ?>
                <?php if (Session::has("eventoExistente")): ?>
                  <div class="alert alert-danger alert-dismissible center-block" role="alert"><?php echo Session::get("eventoExistente") ?></div>
                <?php endif ?>
                <?php if (Session::has("eventoVisitado")): ?>
                  <div class="alert alert-info alert-dismissible center-block" role="alert"><?php echo Session::get("eventoVisitado") ?></div>
                <?php endif ?>
                <?php if (Session::has("eventoNoVisitado")): ?>
                  <div class="alert alert-warning alert-dismissible center-block" role="alert"><?php echo Session::get("eventoNoVisitado") ?></div>
                <?php endif ?>
                <?php if (Session::has("eventoEliminado")): ?>
                  <div class="alert alert-danger alert-dismissible center-block" role="alert"><?php echo Session::get("eventoEliminado") ?></div>
                <?php endif ?>
                <!-- /.panel-heading -->
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Evento</th>
                          <th>Lugar</th>
                          <th>Fecha</th>
                          <th>Asistió</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <?php
                      foreach ($eventos as $evento):
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $evento->eve_nombre ?></td>
                            <td><?php echo $evento->eve_direccion ?></td>
                            <td><?php echo $evento->eve_fecha_inicio ?></td>
                            <td><?php echo $evento->iti_visitado ?></td>
                            <td>
                              <a title="Ver Evento" href="<?php echo url("home/eventos/det/" . $evento->eve_id) ?>" class="btn btn-xs btn-primary"><i class="fa fa-eye fa-fw"></i></a>
                              <?php if ($evento->iti_visitado === 'Si'): ?>

                                <a title="No Visitado" href="<?php echo url("itinerario/eventonovisitado/" . $evento->eve_id) ?>" class="btn btn-xs btn-success"><i class="fa fa-rocket fa-fw"></i></a>
                              <?php else: ?>
                                <a title="Visitado" href="<?php echo url("itinerario/eventovisitado/" . $evento->eve_id) ?>" class="btn btn-xs btn-warning"><i class="fa fa-rocket fa-fw"></i></a>
                              <?php endif ?>
                              <a title="Eliminar" href="<?php echo url("itinerario/eventoeliminar/" . $evento->eve_id) ?>" class="btn btn-xs btn-danger"><i class="fa  fa-ban fa-fw"></i></a></td>
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
      @include('Templates.Frontend.footer')
      @include('Templates.Frontend.foot')
      <?php include ("/../../Templates/Frontend/footer.php") ?>
      <?php include ("/../../Templates/Frontend/foot.php") ?>