@include('Templates.Backend.headPanel')

<section id="container" >

  <!-- **********************************************************************************************************************************************************
  Contenido destacado BAR Y NOTIFICACIONES
  *********************************************************************************************************************************************************** -->

  <!-- Inicio de cabecera-->
  <header class="header black-bg">
    <div class="sidebar-toggle-box">
      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>

    <!--logo inico-->
    <a href="index.html" class="logo"><b>Panel Control</b></a>
    <!--logo fin-->

    <div class="nav notify-row" id="top_menu">
      <!--  inicio notificaciones -->
      <ul class="nav top-menu">           
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
            <i class="fa fa-tasks"></i>
            <span class="badge bg-theme">4</span>
          </a>
          <ul class="dropdown-menu extended tasks-bar">
            <div class="notify-arrow notify-arrow-green"></div>
            <li>
              <p class="green">You have 4 pending tasks</p>
            </li>
            <li>
              <a href="index.html#">
                <div class="task-info">
                  <div class="desc">DashGum Admin Panel</div>
                  <div class="percent">40%</div>
                </div>
                <div class="progress progress-striped">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="index.html#">
                <div class="task-info">
                  <div class="desc">Database Update</div>
                  <div class="percent">60%</div>
                </div>
                <div class="progress progress-striped">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="index.html#">
                <div class="task-info">
                  <div class="desc">Product Development</div>
                  <div class="percent">80%</div>
                </div>
                <div class="progress progress-striped">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80% Complete</span>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="index.html#">
                <div class="task-info">
                  <div class="desc">Payments Sent</div>
                  <div class="percent">70%</div>
                </div>
                <div class="progress progress-striped">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="sr-only">70% Complete (Important)</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="external">
              <a href="#">See All Tasks</a>
            </li>
          </ul>
        </li>
        <!-- bandeja de entrada de inicio desplegable-->
        <li id="header_inbox_bar" class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
            <i class="fa fa-envelope-o"></i>
            <span class="badge bg-theme">5</span>
          </a>
          <ul class="dropdown-menu extended inbox">
            <div class="notify-arrow notify-arrow-green"></div>
            <li>
              <p class="green">You have 5 new messages</p>
            </li>
            <li>
              <a href="index.html#">
                <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                </span>
                <span class="message">
                  Hi mate, how is everything?
                </span>
              </a>
            </li>
            <li>
              <a href="index.html#">
                <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                </span>
                <span class="message">
                  Hi, I need your help with this.
                </span>
              </a>
            </li>
            <li>
              <a href="index.html#">
                <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                </span>
                <span class="message">
                  Love your new Dashboard.
                </span>
              </a>
            </li>
            <li>
              <a href="index.html#">
                <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                </span>
                <span class="message">
                  Please, answer asap.
                </span>
              </a>
            </li>
            <li>
              <a href="index.html#">See all messages</a>
            </li>
          </ul>
        </li>
        <!-- bandeja de entrada de fin-->
      </ul>
      <!--  Fin notificaciones-->

      <!--  inicio cerrar sesion-->
    </div>
    <div class="top-menu">
      <ul class="nav pull-right top-menu">
        <li><a class="logout" href="login.html">cerrar sesion</a></li>
      </ul>
    </div>
  </header>
  <!--Fin cerrar sesion-->
  <!--FIN CABECERA-->

  <!-- **********************************************************************************************************************************************************
  MENÚ barra lateral principal
  *********************************************************************************************************************************************************** -->
  <!--BARRA LATERAL INICIO-->
  <aside>
    <div id="sidebar"  class="nav-collapse ">
      <!-- BARRA LATERAL MENU INICIO-->
      <ul class="sidebar-menu" id="nav-accordion">
        <!-- IMAGEN USUARIO INICIO-->
        <p class="centered"><a href="profile.html"><img src="#" class="img-circle" width="60"></a></p>
        <h5 class="centered">TPS BUGA</h5>
        <!-- IMAGEN USUARIO FIN-->

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
          <a class="active" href="javascript:;" >
            <i class="fa fa-book"></i>
            <span>Sitio</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/sitio/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/sitio/editar')}}">Editar</a></li>
            <li><a  href="{{url('admin/sitio/reporte')}}">Reporte</a></li>
            <li class="active"><a  href="{{url('admin/sitio/listar')}}">Listar</a></li>
          </ul>
        </li>
        
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-tasks"></i>
            <span>Evento</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/evento/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/evento/editar')}}">Editar</a></li>
            <li><a  href="{{url('admin/evento/reporte')}}">Reporte</a></li>
            <li><a  href="{{url('admin/evento/listar')}}">Listar</a></li>
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
                  <h4><i class="fa fa-angle-right"></i> Sitio</h4>
                  <hr>
                  <thead>
                    <tr>
                      <th><i class="fa fa-bullhorn"></i> Nombre</th>
                      <th><i class="fa fa-bullhorn"></i> Categoria</th>
                      <th><i class="fa fa-bullhorn"></i> Subcategoria</th>
                      <th><i class="fa fa-bullhorn"></i> Direccion</th>
                      <th><i class="fa fa-bullhorn"></i> Telefono</th>
                      <th><i class="fa fa-bullhorn"></i> Descripcion</th>
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
                        <a href="basic_table.html#">historia</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">4333calle</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">54644</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">Lorem Ipsum dolor</a>
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
                        <a href="basic_table.html#">historia</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">4333calle</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">54644</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">Lorem Ipsum dolor</a>
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
                        <a href="basic_table.html#">historia</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">4333calle</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">54644</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">Lorem Ipsum dolor</a>
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




