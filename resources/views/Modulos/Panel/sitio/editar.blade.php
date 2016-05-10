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
            <li><a  href="{{url('admin/categoria/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/categoria/editar')}}">Editar</a></li>
            <li><a  href="{{url('admin/categoria/reporte')}}">Reporte</a></li>
            <li><a  href="{{url('admin/categoria/listar')}}">Listar</a></li> 
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
            <li class="active"><a  href="{{url('admin/sitio/editar')}}">Editar</a></li>
            <li><a  href="{{url('admin/sitio/reporte')}}">Reporte</a></li>
            <li><a  href="{{url('admin/sitio/listar')}}">Listar</a></li>
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
        <div class="col-lg-12">
          <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Crear Sitio</h4>
             @if ($errors->any())
                         <div class="alert alert-danger alert-dismissible center-block" role="alert">
                             <ul>
                              @foreach ($errors->all() as $error)  
                                 <li>{{$error}}</li>
                                 @endforeach
                             </ul>
                         </div>
                        @endif
            <form class="style-form" method="post" action="{{url('admin/sitio/editar')}}" enctype="multipart/form-data">
              
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <input type="hidden" value="{{$sitios->sit_id}}" name="id" id="id">
              
                  <div class="row col-md-12">
                    <div class="col-md-6">                     
                      <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <select class="form-control"  name="categoria" required="">
                            <option name="0" value="{{$sitios->cat_id}}">{{$sitios->cat_nombre}}</option>
                          <option name="0" value="1">Histórico</option>
                          <option name="0" value="2">Religioso</option>
                        </select>                       
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subcategoria">Subcategoría</label>
                        <select class="form-control"  name="subcategoria" required="">
                            <option name="0" value="{{$sitios->subcat_id}}">{{$sitios->subcat_nombre}}</option>
                          <option name="0" value="1">Parques</option>
                          <option name="0" value="1">Iglesias</option>
                        </select>                       
                      </div>
                    </div> 
                  </div>

                  <div class="row col-md-12">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Sitio" required="" value="{{$sitios->sit_nombre}}">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingresa Teléfono" required="" value="{{$sitios->sit_telefono}}">
                      </div>
                    </div>
                  </div>

                  <div class="row col-md-12">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa Dirección" required="" value="{{$sitios->sit_direccion}}">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Imagen</label>                       
                        <input type="file" class="form-control" id="imagen" name="imagen">
                      </div>
                    </div> 
                  </div>

                  <div class="row col-md-12">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea rows="5" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba una pequeña descripción del sitio">{{$sitios->sit_descripcion}}</textarea>
                      </div>
                    </div>
                  </div>

              <button type="submit" class="btn btn-info btn-fill pull-right">Guardar</button>
              <div class="clearfix"></div>
            </form>
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




