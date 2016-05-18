<div>
    <li class="mt">
        <a class="bienvenido" href="{{url('admin/bienvenido')}}">
            <i class="fa fa-dashboard"></i>
            <span>Bienvenido</span>
        </a>
    </li>

    <li class="sub-menu">
        <a class="categoria" href="javascript:;" >
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
        <a class="subcategoria" href="javascript:;" >
            <i class="fa fa-cogs"></i>
            <span>Subcategoria</span>
        </a>
        <ul class="sub">
            <li><a  href="{{url('admin/subcategoria/listar')}}">Listar</a></li>
            <li><a  href="{{url('admin/subcategoria/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/subcategoria/reporte')}}">Reporte</a></li>
            
        </ul>
    </li>

    <li class="sub-menu">
        <a class="sitio" href="javascript:;" >
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
        <a class="evento" href="javascript:;" >
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
        <a class="usuario" href="javascript:;" >
            <i class="fa fa-th"></i>
            <span>Configuracion de Usuarios</span>
        </a>
        <ul class="sub">
            <li><a  href="{{url('registro/listar')}}">Listar</a></li>
            <li><a  href="{{url('registro/registro')}}">Crear</a></li>
            <!--<li><a  href="{{url('registro/editar')}}">Editar</a></li>-->
            <li><a  href="{{url('admin/configurar/reporte')}}">Reporte</a></li>

        </ul>
    </li>
</ul>
<!-- BARRA LATERAL MENU FIN-->
</div>