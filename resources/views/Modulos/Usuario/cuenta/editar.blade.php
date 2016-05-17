@include('Templates.Backend.headPanel')


<!-- MENU INICIO-->
<li class="sub-menu">
    <a class="active" href="javascript:;" >
        <i class="fa fa-user"></i>
        <span>CUENTA</span>
    </a>
    <ul class="sub">
        <li class="active"><a  href="{{url('usuario/cuenta/editar')}}">Editar</a></li>
        <li><a  href="{{url('usuario/cuenta/eliminar')}}">Eliminar Cuenta</a></li> 
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
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Cuenta</h4>
                    <form class="style-form" method="post">

                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">



                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" required="" value="{{$usuario->dus_nombre}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingresa Apellidos" required="" value="{{$usuario->dus_apellidos}}">
                                </div>
                            </div>
                        </div>
                        <div class="row col-md-12">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Correo</label>                       
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Example@buga.com" required="" value="{{$usuario->dus_correo}}">
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha">Fecha nacimiento</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="AA-MM-DD" required="" value="{{$usuario->dus_fecha_nacimiento}}">
                                </div>
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="genero">Genero</label>
                                    <select class="form-control"  name="genero" required="">
                                        <option value="{{$usuario->dus_genero}}">
                                            @if ($usuario->dus_genero === 'M')
                                    Hombre
                                @else Mujer
                                @endif 
                                        </option>
                                        <option value="M">Hombre</option>
                                        <option value="F">Mujer</option>
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




