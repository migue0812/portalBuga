@include('Templates.Backend.headPanel')
@include('Templates.Backend.asidePanel')


        <!-- MENU INICIO-->
<!--        <div>
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
          <a class="active" href="javascript:;" >
            <i class="fa fa-cogs"></i>
            <span>Subcategoria</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/subcategoria/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/subcategoria/editar')}}">Editar</a></li>
            <li class="active"><a  href="{{url('admin/subcategoria/reporte')}}">Reporte</a></li>
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
       BARRA LATERAL MENU FIN
    </div>-->
  </aside>
  <!--BARRA LATERAL FIN-->

  <!-- **********************************************************************************************************************************************************
  MENU DE CONTENIDO
  *********************************************************************************************************************************************************** -->
  <!--CONTENIDO INICIO-->
  <section id="main-content">
    <section class="wrapper">

      <div class="row col-md-12">
        <h1>No hay reportes</h1>
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




