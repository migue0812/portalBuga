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
          <a class="active" href="javascript:;" >
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
          <a href="javascript:;" >
            <i class="fa fa-th"></i>
            <span>Configuracion</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/configurar/crear')}}">Crear</a></li>
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
            <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Subcategoria</h4>
            <form class="style-form" method="post">
              
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              
                            <div class="row col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="categoria[cat_nombre]">Nombre</label>
                    <input type="text" class="form-control" id="cat_nombre" name="cat_nombre" placeholder="Nombre Subcategoria" required="">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="activo[cat_activo]">Activo</label>
                    <select class="form-control"  name="cat_activo" required="">
                      <option name="0" value="0">0</option>
                      <option name="1" value="1">1</option>
                    </select>
                  </div>
                </div> 
              </div>
              
              <div class="row col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Categoria</label>
                      <select class="form-control"  name="categoria_id" required="">
                        <option name="0" value=""></option>
                      </select>                       
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Imagen</label>                       
                      <input type="file" class="form-control" id="path" name="path" required="">
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




