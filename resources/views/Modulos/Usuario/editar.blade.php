@include('Templates.Frontend.head')
@include('Templates.Frontend.header')


<div class="container-fluid">
  <div class="box">
    <section class="container">
      <div class="container-page">				    
        <form method="post" action="{{url('usuario/cuenta/editar')}}">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

          @if ($errors->any())
                         <div class="alert alert-danger alert-dismissible center-block" role="alert">
                             <ul>
                              @foreach ($errors->all() as $error)  
                                 <li>{{$error}}</li>
                                 @endforeach
                             </ul>
                         </div>
                        @endif
                        @if (Session::has("usuarioEditado"))
    <div class="alert alert-warning alert-dismissible center-block" role="alert">{{Session::get("usuarioEditado")}}</div>
                @endif 
          <div class="col-md-6">
            <h3 class="dark-grey  text-center">Datos Usuario</h3>
            <hr>
            <!--<div class="form-group col-lg-12">
              <label>Usuario</label>
              <input type="" name="" class="form-control" id="" value="">
            </div>-->

            <div class="form-group col-lg-6">
              <label>Password</label>
              <input type="password" name="password" class="form-control" id="password" value="{{$usuario->usu_password}}">
            </div>

            <div class="form-group col-lg-6">
              <label>Repetir Password</label>
              <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="{{$usuario->usu_password}}">
            </div>

            <div class="form-group col-lg-6">
              <label>Correo</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Example@buga.com" required="" value="{{$usuario->dus_correo}}">
            </div>			

          </div>



          <div class="col-md-6">
            <h3 class="dark-grey text-center">Datos Personales</h3>
            <hr>
            <div class="form-group col-lg-12">
              <label>Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required="" value="{{$usuario->dus_nombre}}">
            </div>

            <div class="form-group col-lg-6">
              <label>Apellidos</label>
              <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingresa Apellidos" required="" value="{{$usuario->dus_apellidos}}">
            </div>

            <div class="form-group col-lg-6">
              <label>Fecha Nacimiento</label>
              <input type="date" class="form-control" id="fecha" name="fecha" placeholder="AA-MM-DD" required="" value="{{$usuario->dus_fecha_nacimiento}}">
            </div>

            <div class="form-group col-lg-6">
              <label>Genero</label>
              <select class="form-control" name="genero" id="">
                <option value="{{$usuario->dus_genero}}">
                  @if ($usuario->dus_genero === 'M')
                  Hombre
                  @else Mujer
                  @endif 
                </option>
                <option value="M">hombre</option>
                <option value="F">mujer</option>
              </select>
            </div>
            <div class="form-group col-lg-12 text-right">
              <button class="btn btn-info btn-md" type="submit">Actualizar</button>
            </div>
            <!--<div class="form-group col-lg-12 text-right">
              <a href="{{url('usuario/cuenta/eliminar')}}" ><button class="btn btn-danger btn-md">Eliminar Cuenta</button></a>
            </div>-->
          </div>
        </form>
      </div>
    </section>
  </div>
  <div class="box">
    @include('Templates.Frontend.footer')
  </div>
</div>

@include('Templates.Frontend.foot')