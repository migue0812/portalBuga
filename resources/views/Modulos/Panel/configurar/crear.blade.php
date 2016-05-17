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
            <li><a  href="{{url('admin/categoria/crear')}}">Crear</a></li>
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
          <a href="javascript:;" >
            <i class="fa fa-tasks"></i>
            <span>Evento</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/evento/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/evento/reporte')}}">Reporte</a></li>
            <li><a  href="{{url('admin/evento/listar')}}">Listar</a></li>
          </ul>
        </li>

        <li class="sub-menu">
          <a class="active" href="javascript:;" >
            <i class="fa fa-th"></i>
            <span>Configuracion</span>
          </a>
          <ul class="sub">
            <li class="active"><a  href="{{url('admin/configurar/crear')}}">Crear</a></li>
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
            <h4 class="mb"><i class="fa fa-angle-right"></i> Crear Usuario</h4>
            <form class="style-form" method="post">

              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

              <div class="row col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de Usuario" required="">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="correo">Correo</label>                       
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Example@buga.com" required="">
                  </div>
                </div> 
              </div>

              <div class="row col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder=" ****** " required="">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password"></label>
                    <input type="tel" class="form-control" id="password" name="password" placeholder="Verifique contraseña" value="" required="">
                  </div>
                </div>
              </div>

              <div class="row col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sit_nombre">Nombre</label>
                    <input type="text" class="form-control" id="sit_nombre" name="sit_nombre" placeholder="Ingrese nombre" required="">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingresa Apellidos" value="" required="">
                  </div>
                </div>
              </div>

              <div class="row col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nacimiento">Fecha nacimiento</label>
                    <input type="date" class="form-control" id="nacimiento" name="nacimiento" placeholder="AA-MM-DD" value="" required="">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="genero">Genero</label>
                    <select class="form-control"  name="genero" required="">
                      <option name="1" value="">Hombre</option>
                      <option name="0" value="">Mujer</option>
                    </select>                       
                  </div>
                </div> 
              </div>

              <div class="row col-md-6">
                <div class="col-md-6">                     
                  <div class="form-group">
                    <label for="rol">Rol</label>
                    <select class="form-control"  name="rol" required="">
                      <option name="0" value=""></option>
                    </select>                       
                  </div>
                </div>
              </div>
              
              <div class="row col-lg-12">
              <button type="submit" class="btn btn-info btn-fill center-block">Guardar</button>
              </div>
              
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




