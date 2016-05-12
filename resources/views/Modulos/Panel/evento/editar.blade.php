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
            <li class="active"><a  href="{{url('admin/evento/editar')}}">Editar</a></li>
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
            <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Evento</h4>
            <form class="style-form" method="post">

              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="row col-md-12">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="sitio_id">Sitio</label>
                      <select class="form-control"  name="sitio_id" required="">
                        <option name="0" value=""></option>
                      </select>                       
                    </div>
                  </div>
                </div>
              
                <div class="row col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="eve_nombre">Nombre Evento</label>
                      <input type="text" class="form-control" id="eve_nombre" name="eve_nombre" placeholder="Nombre evento" required="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="eve_direccion">Direccion</label>
                      <input type="text" class="form-control" id="eve_direccion" name="eve_direccion" placiteholder="Ingresa Direccion" required="">
                    </div>
                  </div>
                </div>

                <div class="row col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="eve_nombre_contacto">Nombre Contacto</label>
                      <input type="text" class="form-control" id="eve_nombre_contacto" name="eve_nombre_contacto" placeholder="Nombre Contacto" required="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="eve_correo_contacto">Correo Contacto</label>
                      <input type="email" class="form-control" id="eve_correo_contacto" name="eve_correo_contacto" placeholder="Example@tubuga.com" required="">
                    </div>
                  </div>
                </div>

                <div class="row col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="eve_telefono_contacto">Telefono Contacto</label>
                      <input type="tel" class="form-control" id="eve_telefono_contacto" name="eve_telefono_contacto" placeholder="Ingresa Telefono" required="">
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="eve_valor_boleta">Valor Boleta</label>
                      <input type="number" class="form-control" id="eve_valor_boleta" name="eve_valor_boleta" placeholder="Example '$3000'">
                    </div>
                  </div>
                </div>

                <div class="row col-md-12">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="eve_hora">Hora</label>
                      <input type="time" class="form-control" id="eve_hora" name="eve_hora" placeholder="HH:MM:SS">
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="fecha_inicio">Fecha Inicio</label>
                      <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" placeholder="año-mes-dia">
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="fecha_fin">Fecha Fin</label>
                      <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" placeholder="año-mes-dia">
                    </div>
                  </div>
                </div>

                <div class="row col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Imagen</label>                       
                      <input type="file" class="form-control" id="path" name="path" required="">
                    </div>
                  </div> 
                </div>

                <div class="row col-md-12">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="descripcion">Descripcion</label>
                      <textarea rows="5" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba una pequeña descripcion del evento"></textarea>
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




