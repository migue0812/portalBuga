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
            <li><a href="{{url('admin/categoria/editar')}}">Editar</a></li>
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
            <li><a  href="{{url('admin/subcategoria/editar')}}">Editar</a></li>
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
            <li><a  href="{{url('admin/sitio/editar')}}">Editar</a></li>
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
            <li><a  href="{{url('admin/evento/editar')}}">Editar</a></li>
            <li><a  href="{{url('admin/evento/reporte')}}">Reporte</a></li>
            <li class="active"><a  href="{{url('admin/evento/listar')}}">Listar</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-th"></i>
            <span>Configuracion</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/configurar/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/configurar/editar')}}">Editar</a></li>
            <li><a  href="{{url('admin/configurar/reporte')}}">Reporte</a></li>
            <li><a  href="{{url('admin/configurar/listar')}}">Listar</a></li>
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
              <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                  <h4><i class="fa fa-angle-right"></i> Evento</h4>
                  <hr>
                  <thead>
                    <tr>
                      <th><i class="fa fa-bullhorn"></i> Nombre</th>
                      <th><i class="fa fa-bullhorn"></i> Sitio</th>
                      <th><i class="fa fa-bullhorn"></i> Fecha</th>
                      <th><i class="fa fa-bullhorn"></i> Nombre Contacto</th>
                      <th><i class="fa fa-bullhorn"></i> Correo</th>
                      <th><i class="fa fa-bullhorn"></i> Telefono</th>
                      <th><i class="fa fa-bullhorn"></i> Valor Boleta</th>
                      <th><i class="fa fa-bullhorn"></i> Fecha Inicio</th>
                      <th><i class="fa fa-bullhorn"></i> Fecha Fin</th>
                      <th><i class=" fa fa-edit"></i> Activo</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <a href="basic_table.html#">Company Ltd</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">historia</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">22232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">apolo</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">dahdash@djsjdj</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">33232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">ds3232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">ds3232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">ds3232</a>
                      </td>



                      <td>
                        <span class="label label-info label-mini">Due</span>
                      </td>

                      <td>
                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <a href="basic_table.html#">Dashgum co</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">historia</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">22232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">apolo</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">dahdash@djsjdj</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">33232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">ds3232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">ds3232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">ds3232</a>
                      </td>

                      <td>
                        <span class="label label-warning label-mini">Due</span>
                      </td>
                      <td>
                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <a href="basic_table.html#">Another Co</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">historia</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">22232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">apolo</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">dahdash@djsjdj</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">33232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">ds3232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">ds3232</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">ds3232</a>
                      </td>

                      <td>
                        <span class="label label-success label-mini">Paid</span>
                      </td>

                      <td>
                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>
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




