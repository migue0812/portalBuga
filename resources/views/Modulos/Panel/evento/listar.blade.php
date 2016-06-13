@include('Templates.Backend.headPanel')


        <!-- MENU INICIO-->
        <li class="mt">
          <a href="{{url('admin/bienvenido')}}">
            <i class="fa fa-dashboard"></i>
            <span>Bienvenido</span>
          </a>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-desktop"></i>
            <span>Categoria</span>
          </a>
          <ul class="sub">
            <li><a href="{{url('admin/categoria/crear')}}">Crear</a></li>
            <li><a href="{{url('admin/categoria/reporte')}}">Reporte</a></li>
            <li><a href="{{url('admin/categoria/listar')}}">Listar</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-cogs"></i>
            <span>Subcategoria</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/subcategoria/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/subcategoria/reporte')}}">Reporte</a></li>
            <li><a  href="{{url('admin/subcategoria/listar')}}">Listar</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-book"></i>
            <span>Sitio</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/sitio/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/sitio/reporte')}}">Reporte</a></li>
            <li><a  href="{{url('admin/sitio/listar')}}">Listar</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a class="active" href="javascript:;" >
            <i class="fa fa-tasks"></i>
            <span>Evento</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/evento/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/evento/reporte')}}">Reporte</a></li>
            <li class="active"><a  href="{{url('admin/evento/listar')}}">Listar</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-th"></i>
            <span>Configuracion de Usuarios</span>
        </a>
        <ul class="sub">
            <li><a  href="{{url('registro/listar')}}">Listar</a></li>
            <li><a  href="{{url('registro/registro')}}">Crear</a></li>
            <li><a  href="{{url('admin/configurar/reporte')}}">Reporte</a></li>
          </ul>
        </li>
      </ul>
      <!-- BARRA LATERAL MENU FIN-->
    </div>
  </aside>
  <!--BARRA LATERAL FIN-->

  <!-- **********************************************************************************************************************************************************
  MENU DE CONTENIDO
  *********************************************************************************************************************************************************** -->
  <!--CONTENIDO INICIO-->
  <section id="main-content">
    <section class="wrapper">

        <div class="row">

            <div class="col-lg-12 main-chart">
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="content-panel table-responsive">
                            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible center-block" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)  
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                             @if (Session::has("registrar"))
                            <div class="alert alert-warning alert-dismissible center-block" role="alert">{{Session::get("registrar")}}</div>
                            @endif
                            @if (Session::has("editar"))
                            <div class="alert alert-warning alert-dismissible center-block" role="alert">{{Session::get("editar")}}</div>
                            @endif
                            @if (Session::has("inhabilitar"))
                            <div class="alert alert-danger alert-dismissible center-block" role="alert">{{Session::get("inhabilitar")}}</div>
                            @endif
                            @if (Session::has("habilitar"))
                            <div class="alert alert-info alert-dismissible center-block" role="alert">{{Session::get("habilitar")}}</div>
                            @endif 
                            <table class="table table-striped table-advance table-hover">
                                <h4><i class="fa fa-angle-right"></i> Evento</h4>
                                <hr>
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-bullhorn"></i> Nombre</th>
                                        <th><i class="fa fa-bullhorn"></i> Direccion</th>
                                        <th><i class="fa fa-bullhorn"></i> Nombre Contacto</th>
                                        <th><i class="fa fa-bullhorn"></i> Correo</th>
                                        <th><i class="fa fa-bullhorn"></i> Telefono</th>
                                        <th><i class="fa fa-bullhorn"></i> Valor Boleta</th>
                                        <th><i class="fa fa-bullhorn"></i> Fecha Inicio</th>
                                        <th><i class="fa fa-bullhorn"></i> Fecha Fin</th>
                                        <th><i class=" fa fa-edit"></i> Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($eventos as $evento) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $evento->eve_nombre; ?>
                                            </td>

                                            <td>
                                                <?php echo $evento->eve_direccion; ?>
                                            </td>
                                            <td>
                                                <?php echo $evento->eve_nombre_contacto; ?>
                                            </td>
                                            <td>
                                                <?php echo $evento->eve_correo_contacto; ?>
                                            </td>

                                            <td>
                                                <?php echo $evento->eve_telefono_contacto; ?>
                                            </td>

                                            <td>
                                                <?php echo $evento->eve_valor_boleta; ?>
                                            </td>

                                            <td>
                                                <?php echo $evento->eve_fecha_inicio; ?>
                                            </td>

                                            <td>
                                                <?php echo $evento->eve_fecha_fin; ?>
                                            </td>

                                            <td>
                                                <?php echo $evento->est_nombre; ?>
                                            </td>

                                            <td>
                                                <a title="Ver" href="{{url('home/eventos/det/' . $evento->eve_id)}}" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                                                <a title="Editar" class="btn btn-primary btn-xs" href="{{url('admin/evento/editar/' . $evento->eve_id)}}"><i class="fa fa-pencil"></i></a>
                                                @if($evento->est_nombre === 'Habilitado' )
                                                <a title="Inhabilitar" class="btn btn-danger btn-xs" href="{{url('admin/evento/inhabilitar/' . $evento->eve_id)}}"><i class="fa fa-remove"></i></a>
                                                @else
                                                <a title="Habilitar" class="btn btn-success btn-xs" href="{{url('admin/evento/habilitar/' . $evento->eve_id)}}"><i class="fa fa-check"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div><!-- /content-panel -->
                    </div><!-- /col-md-12 -->
                </div>
            </div>
        </div>
    </section>
</section>


</section>
<!--MENU CONTENIDO FIN-->

<!--PIE DE PAGINA INICIO-->
<footer class="site-footer">
  <div class="text-center">
    &copy; 2016 <a href="#">TPS BUGA</a>
    <a href="index.html#" class="go-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>

</footer>
<!--PIE DE PAGINA FIN-->


@include('Templates.Backend.footPanel')




