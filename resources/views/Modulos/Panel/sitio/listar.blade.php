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
                                @if (Session::has("inhabilitar"))
    <div class="alert alert-danger alert-dismissible center-block" role="alert">{{Session::get("inhabilitar")}}</div>
                @endif
    @if (Session::has("habilitar"))
    <div class="alert alert-info alert-dismissible center-block" role="alert">{{Session::get("habilitar")}}</div>
                @endif 
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
                                            <th><i class=" fa fa-edit"></i> Activo</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($sitios as $sitio):
                                            
                                            <tr>
                                                <td>
                                                    {{$sitio->sit_nombre}}
                                                </td>

                                                <td>
                                                    {{$sitio->cat_nombre}}
                                                </td>

                                                <td>
                                                    {{$sitio->subcat_nombre}}
                                                </td>

                                                <td>
                                                    {{$sitio->sit_direccion}}
                                                </td>

                                                <td>
                                                    {{$sitio->sit_telefono}}
                                                </td>

                                                <td>
                                                    {{$sitio->est_nombre}}
                                                </td>

                                                <td>
                                                    
                                                    <a class="btn btn-primary btn-xs" href="{{url('admin/sitio/editar/' . $sitio->sit_id)}}"><i class="fa fa-pencil"></i></a>
                                                    @if($sitio->est_id === 1)
                                                    <a class="btn btn-danger btn-xs" href="{{url('admin/sitio/inhabilitar/' . $sitio->sit_id)}}"><i class="fa fa-trash-o"></i></a>
                                                @else
                                                <a class="btn btn-success btn-xs" href="{{url('admin/sitio/habilitar/' . $sitio->sit_id)}}"><i class="fa fa-check"></i></a>
                                                @endif
                                                </td>
                                            </tr>
                                            
                                        @endforeach
                                        
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




