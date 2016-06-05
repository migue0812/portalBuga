@include('Templates.Backend.headPanel')



        <!-- MENU INICIO-->
        <li class="mt">
          <a href="{{url('admin/bienvenido')}}">
            <i class="fa fa-dashboard"></i>
            <span>Bienvenido</span>
          </a>
        </li>

        <li class="sub-menu">
          <a class="active" href="javascript:;" >
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
        <div class="col-lg-12">
          <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Categoria</h4>
                    
            <form class="style-form" method="post" action="{{url('admin/categoria/editar')}}" enctype="multipart/form-data">

              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <input type="hidden" value="{{$categoria->cat_id}}" name="cat_id" id="cat_id">
              
              <div class="row col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="categoria[cat_nombre]">Nombre</label>
                    <input type="text" class="form-control" id="cat_nombre" required="" name="cat_nombre" value="{{$categoria->cat_nombre}}"  style="margin: 0px 2px 0px 0px; width: 571px;">
                  </div>
                    <div class="form-group">
                    <label for="activo[cat_descripcion]">Descripcion</label>
                    <textarea type="text" class="form-control" id="cat_descripcion" name="cat_descripcion" required="" style="margin: 0px 2px 0px 0px; height: 182px; width: 571px;">{{$categoria->cat_descripcion}}</textarea>  
                  </div>
                    <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen" required="">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                 </div>
                </div> 
              </div>
              
              <button type="submit" class="btn btn-info btn-md">Editar</button>
              
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




