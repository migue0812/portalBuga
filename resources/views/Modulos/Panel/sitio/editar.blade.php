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
    <a class="active" href="javascript:;" >
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
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Sitio</h4>
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
                                    <select class="form-control"  name="categoria" required="" id="categoriaE">
                                        <option name="0" value="{{$sitios->cat_id}}">{{$sitios->cat_nombre}}</option>
                                        @foreach ($categorias as $categoria)
                                        <option value="{{$categoria->cat_id}}">{{$categoria->cat_nombre}}</option>
                                        @endforeach
                                    </select>                       
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subcategoria">Subcategoría</label>
                                    <select class="form-control"  name="subcategoria" required="" id="subcategoriaE">
                                        <option name="0" value="{{$sitios->subcat_id}}">{{$sitios->subcat_nombre}}</option>

                                    </select>                       
                                </div>
                            </div> 
                        </div>

                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Sitio" value="{{$sitios->sit_nombre}}">
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
                                    <label for="">Imagen 1</label>                       
                                    <input type="file" class="form-control" id="imagen1" name="imagen1">
                                    <?php if (!empty($imagenes[0]->img_id)): ?>
                                        <input type="hidden" value="{{$imagenes[0]->img_id}}" name="img1">
                                    <?php endif ?>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Imagen 2</label>                       
                                    <input type="file" class="form-control" id="imagen2" name="imagen2">
                                    <?php if (!empty($imagenes[1]->img_id)): ?>
                                        <input type="hidden" value="{{$imagenes[1]->img_id}}" name="img2">
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Imagen 3</label>                       
                                    <input type="file" class="form-control" id="imagen3" name="imagen3">
                                    <?php if (!empty($imagenes[2]->img_id)): ?>
                                        <input type="hidden" value="{{$imagenes[2]->img_id}}" name="img3">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>

                        <div class="row col-md-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="sit_etiqueta">Palabras Claves</label>
                                    <textarea rows="4" class="form-control" id="eve_etiqueta" name="sit_etiqueta" placeholder="Escriba palabras claves del esitio">{{$sitios->sit_etiqueta}}</textarea>
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

                        <button type="submit" class="btn btn-info btn-fill pull-right">Editar</button>
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




